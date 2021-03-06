<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <?php
    ;
    ?>
    <section>
      <!-- header section starts  -->

      <header>
        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"
          ><span>T</span><small>ravel</small><span>B</span
          ><small>uddy</small></a
        >

        <nav class="navbar">
          <a href="../index.php/">Home</a>
          <a href="../book.php/">Book</a>
          <a href="../index.php/#packages">Packages</a>
          <a href="../index.php/#services">Services</a>
          <a href="../feedback.php/">Feedback/Review</a>
          <a href="../index.php/#contact">Contact</a>
        </nav>

        <div class="icons">
          <i class="fas fa-search" id="search-btn"></i>
          <i class="fas fa-grip-lines-vertical"></i>

          <i class="fas fa-user" id="login-btn"> &nbsp Login</i>
        </div>

        <form action="" class="search-bar-container">
          <input type="search" id="search-bar" placeholder="search here..." />
          <label for="search-bar" class="fas fa-search"></label>
        </form>
      </header>
      <!-- header section ends -->

      <!-- login form container  -->

      <div class="login-form-container">
        <i class="fas fa-times" id="form-close"></i>

        <form action="">
          <h3>login</h3>
          <input type="email" class="box" placeholder="enter your email" />
          <input
            type="password"
            class="box"
            placeholder="enter your password"
          />
          <input type="submit" value="login now" class="btn" />
          <input type="checkbox" id="remember" />
          <label for="remember">remember me</label>
          <p>forget password? <a href="#">click here</a></p>
          <p>don't have and account? <a href="#">register now</a></p>
        </form>
      </div>
    </section>

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">
      <h1 class="heading">
        <span>h</span>
        <span>o</span>
        <span>t</span>
        <span>e</span>
        <span>l</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="../images/h-1.jpg" alt="" />
          <div class="content">
            <h3>Hotel Fairmont Jaipur</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
              tenetur.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="../images/h-2.jpeg" alt="" />
          <div class="content">
            <h3>Taj Hotel Mumbai</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
              tenetur.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="../images/h-3.jpg" alt="" />
          <div class="content">
            <h3>ITC Maurya Delhi</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
              tenetur.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="../images/h-4.jpg" alt="" />
          <div class="content">
            <h3>ITC Mughal Agra</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
              tenetur.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="../images/h-5.jpg" alt="" />
          <div class="content">
            <h3>ITC Grand Chola chennai</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
              tenetur.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="../images/h-6.jpg" alt="" />
          <div class="content">
            <h3>The Leela Palace Delhi</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
              tenetur.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
      </div>
    </section>

    <!-- gallery section ends -->
  </body>
</html>
