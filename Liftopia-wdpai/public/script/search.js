const search = document.querySelector('input[placeholder="Search for topic..."]');
const topicsContainer = document.querySelector('.topics-table tbody');

search.addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const data = { search: this.value };

        fetch("/search", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        }).then(function(response) {
            return response.json();
        }).then(function(topics) {
            console.log(topics);
            topicsContainer.innerHTML = "";
            loadTopics(topics);
        });
    }
});

function loadTopics(topics) {
    topics.forEach(topic => {
        createTopic(topic);
    });
}

function createTopic(topic) {
    console.log("Szablon HTML: ", document.querySelector("#topics-template"));
    const template = document.querySelector("#topics-template");

    const clone = template.content.cloneNode(true);
    console.log("Klon szablonu: ", clone);



    const title = clone.querySelector("a");
    if (title) {
        title.textContent = topic.title;
        title.href = `/topic/${topic.id}`;
    }


    const posts = clone.querySelector("td:nth-child(2)");
    if (posts) {
        posts.textContent = topic.posts;
    }


    const authorName = clone.querySelector(".author-name");
    if (authorName) {
        authorName.textContent = topic.author_name;
    }

    const createdAt = clone.querySelector(".created-at");
    if (createdAt) {
        createdAt.textContent = topic.created_at;
    } else {
        console.error("Element 'created_at' nie został znaleziony.");
    }

    topicsContainer.appendChild(clone);
}