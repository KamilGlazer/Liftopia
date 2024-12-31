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
            <div class="card">
                <h4><i class="ri-arrow-up-fill"></i> Strength Training Techniques</h4>
                <p>Share tips on effective strength training exercises, proper form, and muscle-building strategies.</p>
            </div>
            <div class="card">
                <h4><i class="ri-store-2-line"></i> Nutrition for Fitness Goals</h4>
                <p>Discuss how to fuel your workouts with the right diet, supplements, and meal planning.</p>
            </div>
            <div class="card">
                <h4><i class="ri-heart-pulse-line"></i> Cardio Workouts for Endurance</h4>
                <p>Explore various cardio routines to improve stamina, heart health, and overall endurance.</p>
            </div>
            <div class="card">
                <h4><i class="ri-shuffle-fill"></i> Flexibility and Mobility Training</h4>
                <p>Talk about stretching routines, yoga, and exercises that improve flexibility and prevent injury.</p>
            </div>
            <div class="card">
                <h4><i class="ri-shake-hands-line"></i> Martial Arts Training</h4>
                <p>Discuss martial arts techniques, training methods, and how they contribute to fitness and self-defense.</p>
            </div>
            <div class="card">
                <h4><i class="ri-brain-line"></i> Fitness Motivation and Mindset</h4>
                <p>Exchange ideas on staying motivated, overcoming plateaus, and keeping a positive fitness mindset.</p>
            </div>
        </div>

    </section>
    <script src="/public/script/base.js"></script>
</body>
</html>