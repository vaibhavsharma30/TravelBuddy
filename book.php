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
          ><span>T</span><small>ravel</small><span>B</span><small>uddy</small></a
        >

        <nav class="navbar">
          <a href="../index.php/">Home</a>
          <a href="#book">Book</a>
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

    <!-- book section starts  -->

    <section class="book" id="book">
      <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="../images/book-img.svg" alt="" />
        </div>

        <form action="../email/mail.php" method="POST">
        <div class="inputBox">
            <h3>Name</h3>
            <input type="text" placeholder=" Name" name="name" />
          </div>
          <div class="inputBox">
            <h3>Email</h3>
            <input type="text" placeholder="Email"  name="email" />
          </div>
          <div class="inputBox">
            <h3>where to</h3>
            <input type="text" placeholder="place name" name="destination" />
          </div>
          <div class="inputBox">
            <h3>how many</h3>
            <input type="number" placeholder="number of guests" name="numb" />
          </div>
          <div class="inputBox">
            <h3>arrivals</h3>
            <input type="date" name="date"/>
          </div>
          
          <input type="submit" class="btn" value="book now" name="submit" />
        </form>
      </div>
    </section>

    <!-- book section ends -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="../script.js"></script>
  </body>
</html>
