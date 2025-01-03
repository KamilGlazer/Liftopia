<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base</title>
    <link rel="stylesheet" href="/public/css/base.css" />
    <link
            href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
            rel="stylesheet"
    />
</head>
<body>
    <div class="logo">
        <a href="/"><img src="/public/assets/price-2.png" alt="logo"><p><span class="lift">Lift</span>opia</p></a>
    </div>
    <div class="user" onclick="toggleMenu()">
        <i class="ri-user-line"></i>
    </div>


    <div class="user-menu" id="userMenu">
        <ul>
            <li><a href="/profile">Profile</a></li>
            <li><form action="/logout" method="POST">
                    <button type="submit"><i class="ri-logout-circle-line"></i> Logout</button>
                </form>
            </li>
        </ul>
    </div>

    <section class="section__container">
        <div class="cards">
            <?php foreach ($sections as $section): ?>
                <div class="card">
                    <h4>
                        <i class="<?= htmlspecialchars($section['icon_class']) ?>"></i>
                        <a href="/section/<?= htmlspecialchars($section['id']) ?>">
                            <?= htmlspecialchars($section['name']) ?>
                        </a>
                    </h4>
                    <p><?= htmlspecialchars($section['description']) ?></p>
                </div>
            <?php endforeach; ?>
        </div>

    </section>
    <script src="/public/script/base.js"></script>
</body>
</html>