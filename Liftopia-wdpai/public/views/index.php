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
              Join the ultimate fitness community and discover a world of motivation, support, and transformation. Connect with like-minded individuals and start your journey today!
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
            Welcome to the heart of fitness enthusiasts! We’re more than just a forum – we’re a community built on passion, knowledge, and shared goals. Whether you're a beginner or a seasoned athlete, you'll find inspiration and guidance here.
        </p>
        <div class="about__grid">
          <div class="about__card">
            <span><i class="ri-open-arm-line"></i></span>
            <div>
              <h4>Engaging Discussions</h4>
              <p>
                  Dive into topics ranging from workout routines to nutrition tips and everything in between.
              </p>
            </div>
          </div>
          <div class="about__card">
            <span><i class="ri-shield-cross-line"></i></span>
            <div>
              <h4>Expert Insights</h4>
              <p>
                  Learn from fitness professionals who share their expertise to help you grow.
              </p>
            </div>
          </div>
          <div class="about__card">
            <span><i class="ri-shuffle-line"></i></span>
            <div>
              <h4>Inclusive Community</h4>
              <p>
                  Connect with people who understand your journey and cheer you on every step of the way.
              </p>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <section class="section__container price__container" id="price">
        <h2 class="section__header">Our Sections</h2>
        <p class="section__description">
            Discover the key sections of our forum, each tailored to support your fitness journey. Whatever your goals are, there’s a place for you here.
        </p>
        <div class="price__grid">
            <div class="price__card">
                <div class="price__content">
                    <h4>Getting Started</h4>
                    <img src="/public/assets/price-1.png" alt="price">
                    <p>
                        Perfect for beginners – introduce yourself and get tips on how to kickstart your fitness journey.
                    </p>
                    <hr>
                </div>
                <a class="btnlink" href="/login">Join Now</a>
            </div>

            <div class="price__card">
                <div class="price__content">
                    <h4>Progress Journals</h4>
                    <img src="/public/assets/price-2.png" alt="price">
                    <p>
                        Track your progress and share your achievements with the community.
                    </p>
                    <hr>
                </div>
                <a class="btnlink" href="/login">Join Now</a>
            </div>

            <div class="price__card">
                <div class="price__content">
                    <h4>Challenge Corner</h4>
                    <img src="/public/assets/price-3.png" alt="price">
                    <p>
                        Join fitness challenges or create your own to inspire others!
                    </p>
                    <hr>
                </div>
                <a class="btnlink" href="/login">Join Now</a>
            </div>
        </div>
    </section>
   

    <section class="section__container class__container" id="class">
      <h2 class="section__header">Our Topics</h2>
      <p class="section__description">
          Explore our dynamic categories designed to inspire and educate. Share your thoughts, ask questions, and find the answers you’ve been searching for.
      </p>
      <div class="class__grid">
        <div class="class__card">
          <img src="/public/assets/class-1.jpg" alt="class" />
          <div class="class__content">
            <h4>Strength & Conditioning</h4>
            <p>Discuss strength training techniques and effective conditioning methods.</p>
          </div>
        </div>
        <div class="class__card">
          <img src="/public/assets/boxing.jpg" alt="class" />
          <div class="class__content">
            <h4>Martial Arts & Self-Defense</h4>
            <p>Explore martial arts strategies and share tips on self-defense.</p>
          </div>
        </div>
        <div class="class__card">
          <img src="/public/assets/class-3.jpg" alt="class" />
          <div class="class__content">
            <h4>Bodybuilding & Aesthetics</h4>
            <p>Dive into discussions about sculpting your dream physique.</p>
          </div>
        </div>
        <div class="class__card">
          <img src="/public/assets/stretching.jpg" alt="class" />
          <div class="class__content">
            <h4>Recovery & Mobility</h4>
            <p>Learn and share strategies for faster recovery and improved flexibility.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container client__container" id="client">
        <h2 class="section__header">What People Says About Us?</h2>
        <p class="section__description">
            Real people. Real transformations. Our members’ stories highlight the power of community and collective support. Join them and become part of something bigger!
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
                            The forum gave me the confidence to share my progress and learn from others' experiences.
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
                            A welcoming space where I found both motivation and lifelong friends!
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
                            I’ve gained more than fitness tips here – it’s a community that pushes me to be better.
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
                            Every post feels like a personal coaching session. Highly recommend it!
                        </p>

                    </div>
                </div>



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