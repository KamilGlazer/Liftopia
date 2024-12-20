<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Liftopia</title>
  <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
  <link rel="stylesheet" href="/public/css/login.css" />
</head>
<body>

  <section class="section__container">
    <div class="main__container">
      <div class="logo">
        <a href="/"><img src="/public/assets/price-2.png" alt="logo"></a>
      </div>
      <div class="login__container">
        <h1><span>LIFT</span>OPIA LOGIN</h1>
        <p class="quote">Every rep counts. Every login matters.</p>
        <form action="/login" method="POST">
            <div class="messages" >
                <?php if(isset($messages)){
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
          <div class="form__group">
            <input type="email" id="email" name="email" required placeholder=" "/>
            <label for="email"><i class="ri-user-line"></i><span>Email</span></label>
          </div>
          <div class="form__group">
            <input type="password" id="password" name="password" required placeholder=" "/>
            <label for="password"><i class="ri-lock-line"></i><span>Password</span></label>
          </div>
          <a href="#" class="forgot__password">Forgot password?</a>
          <button class="btn" type="submit">LOG IN</button>
        </form>
        <p>Don't have an account? <a href="/register">Sign up</a></p>
      </div>
    </div>
  </section>
  
  <script src="/public/logic/login.js"></script>
</body>
</html>