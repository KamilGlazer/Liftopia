<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum Section</title>
    <link rel="stylesheet" href="/public/css/section.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

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
                <th class="title">Topic</th>
                <th>Posts</th>
                <th>Author</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($topics as $topic): ?>
                    <tr>
                        <td class="title">
                            <a href="/section/<?php echo $sectionId?>/topic/<?= htmlspecialchars($topic['id']) ?>">
                                <?= htmlspecialchars($topic['title']) ?>
                            </a>
                        </td>
                        <td><?= htmlspecialchars($topic['posts']) ?></td>
                        <td>
                            <div class="author_date">
                                <span class="author-name"><?= htmlspecialchars($topic['author_name']) ?></span>
                                <span class="created-at"><?= htmlspecialchars(date('Y-m-d H:i:s', strtotime($topic['created_at']))) ?></span>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>



    <form id="create-topic-form" class="create-topic-form" action="/createTopic/<?php echo $sectionId; ?>" method="POST" style="display: <?php echo !empty($messages) ? 'block' : 'none'; ?>;">
        <input type="text" name="title" placeholder="Title" value="<?php echo htmlspecialchars($title); ?>" required>
        <textarea name="content" placeholder="Write your content..." rows="5" required><?php echo htmlspecialchars($content); ?></textarea>
        <?php if (!empty($messages)): ?>
            <div class="messages">
                <ul>
                    <?php foreach ($messages as $message): ?>
                        <li><i class="ri-error-warning-line"></i> <?php echo htmlspecialchars($message); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <button type="submit">CREATE</button>
    </form>

    <?php if (!empty($messages)): ?>
        <div class="button-container">
            <button id="add-topic-button" class="add-topic-button"><i class="ri-file-reduce-line"></i></button>
        </div>
    <?php else: ?>
        <div class="button-container">
            <button id="add-topic-button" class="add-topic-button"><i class="ri-file-add-line"></i></button>
        </div>
    <?php endif; ?>


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
