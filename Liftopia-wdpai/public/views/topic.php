<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topic</title>
    <link rel="stylesheet" href="/public/css/topic.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <?php
    usort($posts, function ($a, $b) {
        return strtotime($a['created_at']) - strtotime($b['created_at']);
    });
    ?>
</head>
<body>
    <div class="container">
        <div class="logo">
            <a href="/"><img src="/public/assets/price-2.png" alt="logo"><p><span class="lift">Lift</span>opia</p></a>
        </div>
        <div class="path">
            Liftopia > <a href="/base"> Sections </a> >
            <a href="/section/<?= htmlspecialchars($posts[0]['section_id']) ?>">
                <?= htmlspecialchars($posts[0]['section_name']) ?>
            </a> > <?= htmlspecialchars($posts[0]['title']) ?>
        </div>
        <div class="posts">
            <?php foreach ($posts as $post): ?>
                <div class="post-card">
                    <div class="post-header">
                        <div class="user-info">
                            <img src="<?= htmlspecialchars($post['avatar_path'] ?? '/public/assets/default-avatar.png') ?>" alt="User Avatar" class="user-avatar">
                            <p class="nickname"><?= htmlspecialchars($post['nickname']) ?></p>
                            <p class="timestamp"><?= htmlspecialchars(date('Y-m-d H:i:s', strtotime($post['created_at']))) ?></p>
                        </div>
                        <div class="post-content">
                            <p><?= htmlspecialchars($post['content']) ?></p>
                        </div>
                    </div>
                    <div class="post-footer"></div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="form_container">
            <div class="forum">

                <form action="/addPost/<?= htmlspecialchars($posts[0]['id']) ?>" method="POST">
                    <textarea name="content" placeholder="Write your thoughts..." required></textarea>
                    <button type="submit"> ADD </button>
                </form>
            </div>

            <div class="information_label">
                <p>Post Writing Rules: </p>
                <p>   * Do not use profanity. </p>
                <p>   * Do not insult others - you have the right to express your opinion, but don't go overboard.</p>
                <p>   * Do not spam in specific topics. </p>
                </p>
            </div>
        </div>


        <div>
</body>
</html>
