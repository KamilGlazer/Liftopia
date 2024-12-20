<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liftopia</title>
    <link rel="stylesheet" href="/public/css/register.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
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
                <form>
                    <div class="form__group">
                        <label for="firstName" class="labelIcon"><i class="ri-user-line"></i></label>
                        <input type="text" id="firstName" name="fistName" placeholder="First Name" />
                    </div>
                    <div class="form__group"> 
                        <label for="lastName" class="labelIcon"><i class="ri-user-fill"></i></label>
                        <input type="text" id="lastName" name="lastName" placeholder="Last Name" />
                    </div>
                    <div class="form__group"> 
                        <label for="dateOfBirth" class="labelIcon"><i class="ri-calendar-line"></i></label>
                        <input type="date" id="dateOfBirth" name="dateOfBirth" placeholder="Date Of Birth" />
                    </div>
                    <div class="form__group">
                        <label for="email" class="labelIcon"><i class="ri-mail-line"></i></label>
                        <input type="email" id="email" name="email" placeholder="Email" />
                    </div>
                    <div class="form__group">
                        <label for="password" class="labelIcon"><i class="ri-lock-line"></i></label>
                        <input type="password" id="password" name="password" placeholder="Password" />
                    </div>
                        <button class="btn" type="submit">CREATE ACCOUNT</button>
                </form>
                <p>Alredy have an account? <a href="/login">Log in</a></p>
            </div>
        </div>
    </section>
    <script></script>
</body>
</html>