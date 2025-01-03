<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Section</title>
    <link rel="stylesheet" href="/public/css/section.css">
    <?php
    usort($topics, function ($a, $b) {
        return $b['created_at'] - $a['created_at'];
    });
    ?>
</head>
<body>
<div class="container">
        <div class="logo">
            <a href="/"><img src="/public/assets/price-2.png" alt="logo"><p><span class="lift">Lift</span>opia</p></a>
        </div>

    <div class="search-container">
        <input type="text" id="search-bar" class="search-bar" placeholder="Search for topic...">
    </div>

        <table class="topics-table">
            <thead>
            <tr>
                <th>Topic</th>
                <th>Posts</th>
                <th>Author</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($topics as $topic): ?>
                    <tr>
                        <td>
                            <a href="/topic/<?= htmlspecialchars($topic['id']) ?>">
                                <?= htmlspecialchars($topic['title']) ?>
                            </a>
                        </td>
                        <td><?= htmlspecialchars($topic['posts']) ?></td>
                        <td>
                            <div class="author_date">
                                <span class="author-name"><?= htmlspecialchars($topic['author_name']) ?></span>
                                <span class="created-at"><?= htmlspecialchars($topic['created_at']) ?></span>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="button-container">
            <button id="add-topic-button" class="add-topic-button">Add Topic</button>
        </div>
    </div>
    <script src="/public/script/search.js"></script>
    </body>
</html>

<template id="topics-template">
    <tr>
        <td>
            <a href="#">title</a>
        </td>
        <td>posts</td>
        <td>
            <div class="author_date">
                <span class="author-name">author_name</span>
                <span class="created-at">created</span>
            </div>
        </td>
    </tr>
</template>
