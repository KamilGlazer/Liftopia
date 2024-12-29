<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    
    <link rel="stylesheet" href="/public/css/styles.css" />
    <title>Liftopia</title>
  </head>
  <body>
    <header class="header">
      <nav>
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#"><img src="/public/assets/price-2.png" alt="logo"><p><span class="lift">Lift</span>opia</p></a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <span><i class="ri-menu-line"></i></span>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li class="link"><a href="#home">Home</a></li>
          <li class="link"><a href="#about">About</a></li>
          <li class="link"><a href="#class">Training</a></li>
          <li class="link"><a href="#client">Reviews</a></li>
          <li class="link"><a href="#trainer">Trainers</a></li>
          <li class="link"><a href="#price">Plans</a></li>
          <li class="link"><a class="btnlink" href="/login">Log in</a></li>
        </ul>
      </nav>
      <div class="section__container header__container" id="home">
        <div class="header__content">
          <h4>Elevate Your Strength &</h4>
          <h1 class="section__header"><span class="auto-type"></span></h1>
          <p>
            Discover the power within you and take the first step towards a healthier, stronger, and unstoppable version of yourself. Start your fitness journey today and achieve the transformation you have always dreamed of!
          </p>
          <div class="header__btn">
            <a class="btnlink" href="/login">Join Today</a>
          </div>
        </div>
        <div class="header__image">
          <img src="/public/assets/choose-img.png" alt="header" />
        </div>
      </div>
    </header>

    <section class="section__container about_container" id="about">
      <div class="about__image">
        <img src="/public/assets/hero_image.png" alt="about" />
      </div>
      <div class="about__content">
        <h2 class="section__header">Our Story</h2>
        <p class="section_description">
          We are a team of experienced personal trainers dedicated to helping you achieve your fitness goals. 
          With years of expertise, passion, and a personalized approach, we tailor each session to your unique needs. 
          Whether you're just starting your journey or aiming to reach new heights, we are here to guide, motivate, and inspire you every step of the way.
        </p>
        <div class="about__grid">
          <div class="about__card">
            <span><i class="ri-open-arm-line"></i></span>
            <div>
              <h4>Personalized Training Plans</h4>
              <p>
                We create customized workout programs tailored to your goals, fitness level, and lifestyle, ensuring maximum results and steady progress.
              </p>
            </div>
          </div>
          <div class="about__card">
            <span><i class="ri-shield-cross-line"></i></span>
            <div>
              <h4>Expert Guidance</h4>
              <p>
                Our certified trainers bring years of experience and knowledge to every session, helping you train safely, effectively, and with purpose.
              </p>
            </div>
          </div>
          <div class="about__card">
            <span><i class="ri-shuffle-line"></i></span>
            <div>
              <h4>Flexible Scheduling</h4>
              <p>
                We understand your busy life, which is why we offer flexible training times to fit your schedule, 
                making it easier than ever to prioritize your health.
              </p>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <section class="section__container client__container" id="client">
      <h2 class="section__header">What People Says About Us?</h2>
      <p class="section__description">
        Our clients success stories speak for themselves. From beginners taking their first steps in fitness to seasoned athletes reaching new milestones, 
        we are proud to be part of their journey. Discover what our clients have to say about their experience, progress, and the positive changes they have achieved with our support and guidance.
      </p>

      <div class="swiper">

        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="client__card">
              <img src="/public/assets/client-1.jpg" alt="client" >
              <h4>Mike Ross</h4>
              <h5>Lawyer</h5>
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
              </div>
              <p>
                The team is incredibly supportive and motivating. They really help me push beyond my limits.
              </p>
              
            </div>
          </div>

          <div class="swiper-slide">
            <div class="client__card">
              <img src="/public/assets/client-2.jpg" alt="client" >
              <h4>Rachel Zane</h4>
              <h5>Secretary</h5>
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                
              </div>
              <p>
                Every session is challenging yet rewarding, and I am amazed by how much progress I have made!
              </p>
            
            </div>
          </div>
         
          <div class="swiper-slide">
            <div class="client__card">
              <img src="/public/assets/client-3.jpg" alt="client" >
              <h4>Walter White</h4>
              <h5>Chemistry teacher</h5>
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-half-line"></i></span>
              </div>
              <p>
                I have gained not only strength but also confidence in myself, all thanks to these trainers.
              </p>
              
            </div>
          </div>

          <div class="swiper-slide">
            <div class="client__card">
              <img src="/public/assets/client-4.jpg" alt="client" >
              <h4>Jesse Pinkman</h4>
              <h5>Seller</h5>
              <div class="client__ratings">
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-fill"></i></span>
                <span><i class="ri-star-half-line"></i></span>
              </div>
              <p>
                The workouts are always varied and fun, and I love how much I have learned from the team!
              </p>
              
            </div>
          </div>

          

        </div>
      </div>
    </section>

   

    <section class="section__container class__container" id="class">
      <h2 class="section__header">Our Training Programs</h2>
      <p class="section__description">
        We offer personalized training programs that focus on key areas to help you achieve your fitness goals. 
        Whether you're aiming to build strength, sculpt your physique, improve mobility and flexibility, or train for martial arts,
         our experienced personal trainers will create a plan tailored to your specific needs. With one-on-one guidance, we ensure that 
         each session challenges you and helps you progress at your own pace.
      </p>
      <div class="class__grid">
        <div class="class__card">
          <img src="/public/assets/class-1.jpg" alt="class" />
          <div class="class__content">
            <h4>Strength Development</h4>
            <p>Building power</p>
          </div>
        </div>
        <div class="class__card">
          <img src="/public/assets/boxing.jpg" alt="class" />
          <div class="class__content">
            <h4>Martial Arts Training</h4>
            <p>Fighting techniques and conditioning</p>
          </div>
        </div>
        <div class="class__card">
          <img src="/public/assets/class-3.jpg" alt="class" />
          <div class="class__content">
            <h4>Physique Sculpting</h4>
            <p>Body shaping</p>
          </div>
        </div>
        <div class="class__card">
          <img src="/public/assets/stretching.jpg" alt="class" />
          <div class="class__content">
            <h4>Mobilty & Flexibility</h4>
            <p>Improving movement and joint health</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container trainer__container" id="trainer">
      <h2 class="section__header">Our Trainers</h2>
      <p class="section__description">
        We are a team of highly skilled and experienced personal trainers dedicated to helping you achieve your fitness goals. 
        With years of expertise in various training methods, we provide personalized coaching that is both effective and motivating. 
        Whether you are a beginner or an advanced athlete, our trainers are committed to guiding you through every step of your fitness journey. 
        We pride ourselves on our passion, professionalism, and ability to adapt to your unique needs, ensuring that each session brings you closer to becoming the best version of yourself.
      </p>
      <div class="trainer__grid">
        <div class="trainer__card">
          <img src="/public/assets/trainer-1.jpg" alt="trainer">
        </div>
        <div class="trainer__card">
          <div class="trainer__content">
            <h4>James Rodriquez</h4>
            <h5>Strength and Conditioning</h5>
            <hr>
            <p>
              James has been working with athletes for over 15 years, specializing in strength and conditioning. 
              His extensive experience includes training professional football players and bodybuilders. With his passion for functional strength, 
              he tailors each program to enhance your endurance, power, and overall fitness. Whether you're preparing for a competition or just looking to build strength, 
              James will help you push your limits.
            </p>
            <div class="trainer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-instagram-line"></i></a>
              <a href="#"><i class="ri-twitter-x-line"></i></a>
            </div>
          </div>
        </div>

        <div class="trainer__card">
          <img src="/public/assets/trainer-5.jpg" alt="trainer">
        </div>
        <div class="trainer__card">
          <div class="trainer__content">
            <h4>Sarah Miller</h4>
            <h5>Track and Field Specialist</h5>
            <hr>
            <p>
              Sarah has been working with elite track and field athletes for over 10 years. With a deep understanding of sprinting, jumping, and endurance training, 
              she brings a wealth of experience to her clients. Sarah focuses on optimizing performance through agility, speed, and explosive power.
              Her clients, ranging from amateur runners to professional sprinters, see remarkable improvements in their performance and overall fitness.
            </p>
            <div class="trainer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-instagram-line"></i></a>
              <a href="#"><i class="ri-twitter-x-line"></i></a>
            </div>
          </div>
        </div>

        <div class="trainer__card">
          <img src="/public/assets/trainer-2.jpg" alt="trainer">
        </div>
        <div class="trainer__card">
          <div class="trainer__content">
            <h4>Jacob White</h4>
            <h5>Martial Arts and Fitness</h5>
            <hr>
            <p>
              Jacob has been practicing and teaching martial arts for over 20 years. His expertise ranges from Brazilian Jiu-Jitsu to Muay Thai, 
              with a focus on conditioning and agility. He believes that fitness is about both physical and mental strength, and his training methods are designed to improve not only your body but also your focus and discipline. 
              Whether you're looking to defend yourself or build a strong, lean physique, Jacob's martial arts training will take you to the next level.
            </p>
            <div class="trainer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-instagram-line"></i></a>
              <a href="#"><i class="ri-twitter-x-line"></i></i></a>
            </div>
          </div>
        </div>

        <div class="trainer__card">
          <img src="/public/assets/trainer-4.jpg" alt="trainer">
        </div>
        <div class="trainer__card">
          <div class="trainer__content">
            <h4>Emily Johnson</h4>
            <h5>Yoga and Flexibility Training</h5>
            <hr>
            <p>
              Emily has been practicing yoga for over 12 years and teaching for the past 7. Her sessions focus on building flexibility, balance, 
              and inner peace. Emily’s approach combines yoga with strength training to help clients improve both their physical and mental wellbeing. 
              She has worked with individuals of all levels, from beginners to athletes, and her personalized programs are designed to help you increase mobility, reduce stress, and improve overall strength.
            </p>
            <div class="trainer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-instagram-line"></i></a>
              <a href="#"><i class="ri-twitter-x-line"></i></a>
            </div>
          </div>
        </div>

      
      </div>
    </section>

    <section class="section__container price__container" id="price">
        <h2 class="section__header">Our Plans</h2>
        <p class="section__description">
          We offer a variety of personalized fitness plans designed to suit all levels of fitness. Whether you're just starting out or looking to push your limits, our plans are tailored to help you achieve your goals efficiently and effectively. 
          Choose the plan that fits your needs, and let our expert trainers guide you every step of the way to a healthier, stronger you.
        </p>
        <div class="price__grid">
          <div class="price__card">
            <div class="price__content">
              <h4>Free Consultation Plan</h4>
              <img src="/public/assets/price-1.png" alt="price">
              <p>
                Kickstart your fitness journey with a Free Consultation session! Our expert trainers will assess your current fitness level and help you set achievable goals. 
                This is the perfect way to start without any commitment and understand how we can help you transform your body.
              </p>
              <hr>
              <h4>Key Features</h4>
              <p>Free initial consultation</p>
              <p>Fitness sssessment</p>
              <p>Personalized recommendations</p>
            </div>
            <a class="btnlink" href="/login">Join Now</a>
          </div>

          <div class="price__card">
            <div class="price__content">
              <h4>Beginner Plan</h4>
              <img src="/public/assets/price-2.png" alt="price">
              <p>
                Ideal for those just starting out, the Beginner Plan focuses on building a solid foundation. 
                With easy-to-follow workouts and expert guidance, you'll quickly gain confidence and see progress as you work towards your fitness goals.
              </p>
              <hr>
              <h4>Key Features</h4>
              <p>Tailored beginner workouts</p>
              <p>Progress tracking</p>
              <p>Nutritional advice</p>
            </div>
            <a class="btnlink" href="/login">Join Now</a>
          </div>

          <div class="price__card">
            <div class="price__content">
              <h4>Advanced Performance Plan</h4>
              <img src="/public/assets/price-3.png" alt="price">
              <p>
                For those ready to take their fitness to the next level, the Advanced Performance Plan is designed to challenge your limits. 
                Work with top trainers to push your strength, endurance, and performance, and achieve results that match your ambition.
              </p>
              <hr>
              <h4>Key Features</h4>
              <p>High-intensity workouts</p>
              <p>Customized nutrition nlan</p>
              <p>Performance monitoring & adjustments</p>
            </div>
            <a class="btnlink" href="/login">Join Now</a>
          </div>
        </div>
    </section>


   

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo">
            <a href="#"><img src="/public/assets/price-2.png" alt="logo" /><span>Lift</span>opia</a>
          </div>
          <p>
            Take the first step towards a healthier, stronger you with our
            unbeatable pricing plans. Let's sweat, achieve, and conquer
            together!
          </p>
          <div class="footer__socials">
            <a href="#"><i class="ri-facebook-fill"></i></a>
            <a href="#"><i class="ri-instagram-line"></i></a>
            <a href="#"><i class="ri-twitter-x-line"></i></a>
          </div>
        </div>
        <div class="footer__col">
          <h4>Company</h4>
          <div class="footer__links">
            <a href="#">Business</a>
            <a href="#">Partnership</a>
          </div>
        </div>
        <div class="footer__col">
          <h4>About Us</h4>
          <div class="footer__links">
            <a href="#">Blogs</a>
            <a href="#">Careers</a>
          </div>
        </div>
          <div class="footer__col">
              <h4>Contact</h4>
              <div class="footer__links">
                  <a href="#">Contact Us</a>
                  <a href="#">Privacy Policy</a>
                  <a href="#">Terms & Conditions</a>
              </div>
          </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 All rights reserved.
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/public/script/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-type", {
            strings: ["Enhance Yourself!", "Shape Yourself!"],
            typeSpeed:100,
            backSpeed: 50,
            startDelay: 700,
            loop: false,
            onComplete: (self) => {
            document.querySelector(".typed-cursor").style.display = "none";
        }
        })
    </script>
</body>
</html>