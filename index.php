<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRIP.</title>
  <!-- CSS Link -->
  <link rel="stylesheet" href="styles.css" type="text/css">
  <!-- Font Awesome Link -->
  <script src="https://kit.fontawesome.com/84e2199ce0.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php
    include_once 'header.php';
    include_once 'modals.php';
  ?> 

  <!-- Landing Page -->
  <main class="landing-container">
    <!-- Intro -->
    <section class="intro">
      <article>
        <div class="top">
          <h1>LOREM IPSUM <br> DOLOR SIT AMET <br> CONSECTETUR</h1>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, <br> beatae alias at optio atque pariatur
            officia corporis officiis!</p>
        </div>
        <div class="redirects">
          <a href="#" class="links">
            <h1>Jackets</h1>
          </a>
          <a href="#" class="links">
            <h1>Accessories</h1>
          </a>
        </div>
      </article>
      <aside>
        <!-- <img src="assets/images/sam_2_edit.jpg" alt=""> -->
        <div class="links">
          <a href="#">
            <h4>Learn More</h4>
            <div class="icon">
              <i class="fa-solid fa-magnifying-glass"></i>
            </div>
          </a>
          <a href="#">
            <h4>Explore</h4>
            <div class="icon">
              <i class="fa-solid fa-location-arrow"></i>
            </div>
          </a>
        </div>
      </aside>
    </section>
    <!-- About -->
    <section class="about">
      <p><b>TRIP</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dicta, nobis molestiae nesciunt totam
        recusandae ea dolores fugit atque eos placeat inventore libero illum explicabo repudiandae, a enim alias.
        Assumenda quos unde debitis pariatur provident quas repudiandae quibusdam, perferendis fugit.</p>
    </section>

    <!-- Homepage Categories -->
    <section class="home-categories">
      <p>Lorem ipsum dolor, sit amet consectetur <br> adipisicing elit. Quisquam?</p>
      <a href="#">Click Here</a>
    </section>

    <!-- Shop By Categories -->
    <section class="shop-categories">
      <div class="header-details">
        <h2>Shop By Categories</h2>
        <a href="#" class="">
          <h3>See More</h3>
        </a>
      </div>
      <div class="gallery">
        <a href="#" class="content-col">Category 1</a>
        <a href="#" class="content-col">Category 2</a>
        <a href="#" class="content-col">Category 3</a>
        <a href="#" class="content-col">Category 4</a>
        <a href="#" class="content-col">Category 5</a>
        <a href="#" class="content-col">Category 6</a>
        <a href="#" class="content-col">Category 7</a>
        <a href="#" class="content-col">Category 8</a>
        <a href="#" class="content-col">Category 9</a>
        <a href="#" class="content-col">Category 10</a>
      </div>
    </section>
  </main>
  <?php
    include_once 'footer.php';
  ?>
  <!-- Main Js Link -->
  <script src="assets/javascript/main.js"></script>
</body>

</html>