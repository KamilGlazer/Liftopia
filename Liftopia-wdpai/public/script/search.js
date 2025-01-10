const search = document.querySelector('input[placeholder="Search for topic..."]');
const topicsContainer = document.querySelector('.topics-table tbody');

search.addEventListener("keyup", function(event) {
    if (event.key === "Enter") {
        event.preventDefault();

        const path = window.location.pathname;
        const sectionId = path.split("/")[2];


        const data = {
            search: this.value,
            sectionId : sectionId
        };

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
        const date = new Date(topic.created_at);
        const formattedDate = `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, '0')}-${String(date.getDate()).padStart(2, '0')} ${String(date.getHours()).padStart(2, '0')}:${String(date.getMinutes()).padStart(2, '0')}:${String(date.getSeconds()).padStart(2, '0')}`;
        createdAt.textContent = formattedDate;
    } else {
        console.error("Element 'created_at' nie został znaleziony.");
    }

    topicsContainer.appendChild(clone);
}


document.getElementById('add-topic-button').addEventListener('click', function(event) {
    event.preventDefault();

    var form = document.getElementById('create-topic-form');
    var icon = this.querySelector('i');


    if (form.style.display === 'none' || form.style.display === '') {
        form.style.display = 'block';
        icon.classList.remove('ri-file-add-line');
        icon.classList.add('ri-file-reduce-line');
    } else {
        form.style.display = 'none';
        icon.classList.remove('ri-file-reduce-line');
        icon.classList.add('ri-file-add-line');
    }
});