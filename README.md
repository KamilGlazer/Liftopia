<h1>Liftopia</h1>

<p>
  Liftopia is a web application developed as part of the "Introduction to Web Application Design" course. The project aims to create a community platform for fitness enthusiasts, where users can interact, share fitness-related tips, discuss training programs, and support each other on their fitness journeys. The forum-style design enables users to post topics and reply to discussions.
  The main goal of Liftopia is to provide a space where individuals can find motivation and advice. 
  The application is offering a clean, user-friendly interface, easy navigation, and an engaging community experience. It includes features such as topic categorization, user profiles, and the ability to join discussions on specific fitness topics.
</p>
<hr>

<div align="center">
  <img src="Liftopia-wdpai/assets/img7.png" width="350">
  <img src="Liftopia-wdpai/assets/img8.png" width="350">
  <img src="Liftopia-wdpai/assets/img1.png">
  <img src="Liftopia-wdpai/assets/img2.png" width="350">
  <img src="Liftopia-wdpai/assets/img5.png" width="350">
  <img src="Liftopia-wdpai/assets/img3.png">
</div>

<hr>

<h2>Instalation</h2>
<p>Set up the environment for the app by using Docker. Start your Docker Desktop and make sure you are in the /Liftopia-wdpai directory, then enter the following command in your command line.</p>
<pre><code>docker-compose up --build</code></pre>

<h4>Database credentials</h4>
<pre><code>POSTGRES_USER: postgres
POSTGRES_PASSWORD: mysecretpassword
</code></pre>

<hr>
<h2>Technologies</h2>
<div style="display: flex; flex-direction: column; align-items: center; gap: 10px;">
    <img src="https://img.icons8.com/color/48/000000/html-5.png" alt="HTML" style="margin-right: 10px;"> 
    <img src="https://img.icons8.com/color/48/000000/css3.png" alt="CSS" style="margin-right: 10px;"> 
    <img src="https://img.icons8.com/color/48/000000/javascript.png" alt="JavaScript" style="margin-right: 10px;"> 
    <img src="https://img.icons8.com/officel/40/000000/php-logo.png" alt="PHP" style="margin-right: 10px;"> 
    <img src="https://img.icons8.com/color/48/000000/sql.png" alt="PostgreSQL" style="margin-right: 10px;">
  <img src="https://img.icons8.com/color/48/000000/docker.png" alt="Docker" style="margin-right: 10px;">
</div>

<hr>
<h2>Usage</h2>
Every user, even unlogged, has access to the following pages:

- `/` - Home Page
- `/login` - Login Page
- `/register` - Registration Page

Once a user registers, they are redirected to: `/login`.

If the user logs in successfully, they gain access to:

- `/sections` - View sections and topics
- `/profile` - Profile page where users can change their email, nickname, and profile image
