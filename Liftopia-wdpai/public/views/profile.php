<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="/public/css/profile.css" />
    <link
            href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
            rel="stylesheet"
    />
</head>
<body>
<div class="profile-container">
    <h1>
        <i class="ri-user-settings-line"></i>PROFILE
    </h1>
    <div class="profile-avatar">
        <img src="<?=  isset($_SESSION['avatarPath']) ? htmlspecialchars($_SESSION['avatarPath']) : '/public/assets/man.png' ?>" alt="Profile Avatar" class="avatar-image">
    </div>
    <form action="/update" method="POST" class="profile-form">
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="firstName"
                   placeholder="Enter your first name"
                   value="<?php echo $_SESSION['name']; ?>" required readonly/>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="lastName"
                   placeholder="Enter your last name"
                   value="<?php echo $_SESSION['surname']; ?>" required readonly/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email"
                   placeholder="Enter your email"
                   value="<?php  echo $_SESSION['user_email']; ?>" required />
            <?php if (isset($messages)): ?>
                <?php if (in_array('Invalid email address.', $messages)): ?>
                    <div class="error-message"><i class="ri-error-warning-line"></i> Invalid email address.</div>
                <?php elseif (in_array('User with this email already exists.', $messages)): ?>
                    <div class="error-message"><i class="ri-error-warning-line"></i> User with this email already exists.</div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label for="nickname">Nickname</label>
            <input type="text" id="nickname" name="nickname"
                   placeholder="Enter your nickname"
                   value="<?php echo $_SESSION['nickname']; ?>" required />
            <?php if (isset($messages)): ?>
                <?php if (in_array('Nickname must be at least 4 characters long.', $messages)): ?>
                    <div class="error-message"><i class="ri-error-warning-line"></i> Nickname must be at least 4 characters long.</div>
                <?php elseif (in_array('User with this nickname already exists.', $messages)): ?>
                    <div class="error-message"><i class="ri-error-warning-line"></i> User with this nickname already exists.</div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <p>Select your avatar:</p>
        <div class="form-group avatar-selection">
            <label>
                <input type="radio" name="avatar" value="/public/assets/man.png"
                    <?php echo ($_SESSION['avatarPath'] === '/public/assets/man.png') ? 'checked' : ''; ?> />
                <img src="/public/assets/man.png" alt="Avatar Man" class="avatar-preview" />
            </label>
            <label>
                <input type="radio" name="avatar" value="/public/assets/woman.png"
                    <?php echo ($_SESSION['avatarPath'] === '/public/assets/woman.png') ? 'checked' : ''; ?> />
                <img src="/public/assets/woman.png" alt="Avatar Woman" class="avatar-preview" />
            </label>
        </div>
        <button type="submit" class="save-button"><i class="ri-save-3-line"></i>SAVE</button>
    </form>
</div>

</body>
</html>