<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HTML course (From Zero to Hero) | CodeIT</title>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <!-- Font Awesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <?php

    if (!isset($_SESSION["fname"])) {
      ?>
      <script>
        alert("You must be signed in to purchase the courses");
        location.replace("./../../user/login");
      </script>
      <?php
    }
  ?>

  
    <header class="profile-nav">
    <div class="brand-logo">
      <a href="./../../">CodeIT</a>
    </div>
    <div class="extra">
      <div class="search">
        <input type="text" id="search-courses" class="searchbar" placeholder="Search for courses">
      </div>
      <i class="fas fa-search search-icon"></i>
      <div class="profile">
        <i class="fas fa-user-circle profile-pic"></i>
      </div>
    </div>
  </header>

  <div class="bg" data-img="html_thumbnail.png">
    <div class="container">
      <div id="yt">
        <h1>Learn for free on our YouTube channel</h1>
        <iframe class="yt-vid" src="https://www.youtube.com/embed/Ow0TwtLpqwM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  
  <div class="about-course">
    <div class="course-preview">
      <div class="video-container">
        <div class="play-circle-outer">
          <div class="play-circle-inner">
            <i class="fas fa-play play-icon"></i>
          </div>
        </div>
        <video src="./media/preview.mp4" data-poster="html_thumbnail.png"></video>
      </div>
    </div>
    <div class="course-body">
      <h3 class="course-title">HTML Tutorial (From Zero To Hero)</h3>
      <p class="course-desc">
        In this course, we would learn HTML from the very basic and take it to the advanced HTML 5 and also with some basic knowledge of CSS.
      </p>
      <div class="course-action">
        <a href="./final-purchase" class="btn btn-green">Buy for Free</a>
      </div>
    </div>
  </div>

  <div class="course-details">
    <section>
      <h3 class="section-heading">What you will learn in this course?</h3>
        <ul class="list">
          <li class="list-item">Basics of HTML</li>
          <li class="list-item">Best practices to use while writing HTML</li>
          <li class="list-item">Basic knowledge of CSS</li>
          <li class="list-item">Advanced HTML 5 topics</li>
          <li class="list-item">Creating simple static websites</li>
        </ul>
    </section>
    <section>
      <h3 class="section-heading">Additional things you get from this course</h3>
      <ul class="list">
        <li class="list-item">Downloadable videos</li>
        <li class="list-item">Lifetime access</li>
        <li class="list-item">Quizess</li>
        <li class="list-item">Exercises</li>
        <li class="list-item">Basic knowledge of CSS</li>
      </ul>
    </section>
    <section>
      <h3 class="section-heading">For whom is this course for?</h3>
      <p>
        This course is for everyone. The one who has not started programming yet or one who has the knowledge of some programming languages. This course will take you from the very basic level and put to the advanced level of HTML / HTML 5. There is no prerequisites for you to learn this.
      </p>
    </section>
  </div>
  

  <script src="./../assets/js/headers.js"></script>
  <script src="./js/main.js"></script>
  <script src="./../assets/js/video.js"></script>
</body>
</html>