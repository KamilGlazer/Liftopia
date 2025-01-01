<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liftopia</title>
    <link rel="stylesheet" href="/public/css/register.css">
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <style>
        .messages { color: red; text-align: center; }
    </style>

</head>
<body>
    <section class="section__container">
        <div class="main__container">
            <div class="logo">
                <a href="/"><img src="/public/assets/price-2.png" alt="logo"></a>
            </div>
            <div class="register__container">
                <h1><span>LIFT</span>OPIA REGISTER</h1>
                <p class="quote">Every rep counts. Every register matters.</p>
                <form action="/register" method="POST">
                    <div class="form__group">
                        <label for="nickname" class="labelIcon"><i class="ri-creative-commons-by-line"></i></label>
                        <input type="text" id="nickname" name="nickname" placeholder="Nickname" value="<?= isset($data['nickname']) ? htmlspecialchars($data['nickname']) : '' ?>" />
                        <?php if (isset($messages)): ?>
                            <?php if (in_array('Nickname must be at least 4 characters long.', $messages)): ?>
                                <div class="error-message"><i class="ri-error-warning-line"></i> Nickname must be at least 4 characters long.</div>
                            <?php elseif (in_array('User with this nickname already exists.', $messages)): ?>
                                <div class="error-message"><i class="ri-error-warning-line"></i> User with this nickname already exists.</div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="form__group">
                        <label for="firstName" class="labelIcon"><i class="ri-user-line"></i></label>
                        <input type="text" id="firstName" name="name" placeholder="First Name" value="<?= isset($data['name']) ? htmlspecialchars($data['name']) : '' ?>" />
                        <?php if (isset($messages)): ?>
                            <?php if (in_array('First name must contain only letters.', $messages)): ?>
                                <div class="error-message"><i class="ri-error-warning-line"></i> First name must contain only letters.</div>
                            <?php endif; ?>
                            <?php if (in_array('First name must start with an uppercase letter.', $messages)): ?>
                                <div class="error-message"><i class="ri-error-warning-line"></i> First name must start with an uppercase letter.</div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="form__group">
                        <label for="lastName" class="labelIcon"><i class="ri-user-fill"></i></label>
                        <input type="text" id="lastName" name="surname" placeholder="Last Name" value="<?= isset($data['surname']) ? htmlspecialchars($data['surname']) : '' ?>" />
                        <?php if (isset($messages)): ?>
                            <?php if (in_array('Last name must contain only letters.', $messages)): ?>
                                <div class="error-message"><i class="ri-error-warning-line"></i> First name must contain only letters.</div>
                            <?php endif; ?>
                            <?php if (in_array('Last name must start with an uppercase letter.', $messages)): ?>
                                <div class="error-message"><i class="ri-error-warning-line"></i> First name must start with an uppercase letter.</div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="form__group">
                        <label for="dateOfBirth" class="labelIcon"><i class="ri-calendar-line"></i></label>
                        <input type="date" id="dateOfBirth" name="dateOfBirth" value="<?= isset($data['dateOfBirth']) ? htmlspecialchars($data['dateOfBirth']) : '' ?>" />
                        <div class="error-message"><?= isset($messages) && in_array('You must be at least 16 years old to register.', $messages) ? '<i class="ri-error-warning-line"></i> You must be at least 16 years old to register.' : '' ?></div>
                    </div>

                    <div class="form__group">
                        <label for="email" class="labelIcon"><i class="ri-mail-line"></i></label>
                        <input type="email" id="email" name="email" placeholder="Email" value="<?= isset($data['email']) ? htmlspecialchars($data['email']) : '' ?>" />
                        <?php if (isset($messages)): ?>
                            <?php if (in_array('Invalid email address.', $messages)): ?>
                                <div class="error-message"><i class="ri-error-warning-line"></i> Invalid email address.</div>
                            <?php elseif (in_array('User with this email already exists.', $messages)): ?>
                                <div class="error-message"><i class="ri-error-warning-line"></i> User with this email already exists.</div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="form__group">
                        <label for="password" class="labelIcon"><i class="ri-lock-line"></i></label>
                        <input type="password" id="password" name="password" placeholder="Password" value="<?= isset($data['password']) ? htmlspecialchars($data['password']) : '' ?>" />
                        <?php if (isset($messages) && in_array('Password must be at least 5 characters long.', $messages)): ?>
                            <div class="error-message"><i class="ri-error-warning-line"></i> Password must be at least 5 characters long.</div>
                        <?php endif; ?>
                    </div>

                    <button class="btn" type="submit">CREATE ACCOUNT</button>
                </form>
                <p>Alredy have an account? <a href="/login">Log in</a></p>
            </div>
        </div>
    </section>
    <script src="/public/script/register.js"></script>
</body>
</html>