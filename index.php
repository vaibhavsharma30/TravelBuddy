<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>
          complete responsive tour and travel agency website design tutorial
        </title>
    
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
    <!-- header section starts  -->
    <?php
    ;
    ?>

    <header>
      <div id="menu-bar" class="fas fa-bars"></div>

      <a href="#" class="logo"><span>T</span><small>ravel</small><span>B</span><small>uddy</small></a>

      <nav class="navbar">
        <a href="#home">Home</a>
        <a href="../book.php/">Book</a>
        <a href="#packages">Packages</a>
        <a href="#services">Services</a>
        <a href="../feedback.php/">Feedback/Review</a>
        <a href="#contact">Contact</a>
      </nav>

      <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-grip-lines-vertical"></i>
        
        <i class="fas fa-user" id="login-btn"> <?php
        if(isset($_SESSION['uname'])){
          echo  $_SESSION['uname'];
        }
        else{
          echo "&nbsp Login";
        }
        
        ?></i>
        
      </div>

      <form action="../ret.php" method="POST" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here..." />
        <button style="background-color:#333;" name="search"><label for="search-bar" class="fas fa-search" name="search"></label></button>
        
      </form>
    </header>
    <!-- header section ends -->

    <!-- login form container  -->

    <div class="login-form-container">
      <i class="fas fa-times" id="form-close"></i>

      <form action="../login/homee.php/" method="POST">
        <h3>login</h3>
        <input type="text" class="box" placeholder="Username" name="uname" />
        <input type="password" class="box" placeholder="enter your password" name="pass"/>
        <input type="submit" value="login now" class="btn" name="submit"/>
        
        
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="../login/signup.php"><i class="fas fa-user-plus" id="signup-btn"> &nbsp register now</i></a></p>
      </form>
    </div>
  
     
    

     <!--home section starts  
     -->
   
     <section class="home" id="home">
      <div class="content">
        <h3>adventure is worthwhile</h3>
        <p>dicover new places with us, adventure awaits</p>
        <a href="#" class="btn">discover more</a>
      </div>

      <div class="controls">
        <span class="vid-btn active" data-src="../images/vd-2.mp4"></span>
        <span class="vid-btn" data-src="../images/vd-1.mp4"></span>
        <span class="vid-btn" data-src="../images/vd-3.mp4"></span>
        <span class="vid-btn" data-src="../images/vd-4.mp4"></span>
        <span class="vid-btn" data-src="../images/vid-5.mp4"></span>
      </div>

      <div class="video-container">
        <video
          src="../images/vd-2.mp4"
          id="video-slider"
          loop
          autoplay
          muted
        ></video>
      </div>
    </section> 
    <!-- home section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">
      <h1 class="heading">
        <span>t</span>
        <span>o</span>
        <span>p</span>
        <span class="space"></span>
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="../images/p-1.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Mumbai</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, nam!
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">&#8377 5000.00 <span>&#8377 6000.00</span></div>
            <a href="../login/homee.php/" class="btn" name="submit" >book now</a>
          </div>
        </div>

        <div class="box">
          <img src="../images/p-2.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Manali</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, nam!
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">&#8377 3000.00 <span>&#8377 5000.00</span></div>
            <a href="../login/homee.php/" class="btn" name="submit" >book now</a>
          </div>
        </div>

        <div class="box">
          <img src="../images/p-3.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Delhi</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, nam!
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">&#8377 2000.00 <span>&#8377 3000.00</span></div>
            <a href="../login/homee.php/" class="btn" name="submit" >book now</a>
          </div>
        </div>

        <div class="box">
          <img src="../images/p-4.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Kedarnath</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, nam!
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">&#8377 2000.00 <span>&#8377 3000.00</span></div>
            <a href="../login/homee.php/" class="btn" name="submit" >book now</a>
          </div>
        </div>

        <div class="box">
          <img src="../images/p-5.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Goa</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, nam!
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">&#8377 5000.00 <span>&#8377 5500.00</span></div>
            <a href="../login/homee.php/" class="btn" name="submit" >book now</a>
          </div>
        </div>

        <div class="box">
          <img src="../images/p-6.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Vrindavan</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, nam!
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <div class="price">&#8377 3000.00 <span>&#8377 4000.00</span></div>
            <a href="../login/homee.php/" class="btn" name="submit" >book now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- packages section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">
      <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-hotel"></i>
          <a href="../hotels.php/"><h3>Best hotels</h3></a>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore
            commodi earum, quis voluptate exercitationem ut minima itaque iusto
            ipsum corrupti!
          </p>
        </div>
        <div class="box">
          <i class="fas fa-utensils"></i>
          <h3>food and drinks</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore
            commodi earum, quis voluptate exercitationem ut minima itaque iusto
            ipsum corrupti!
          </p>
        </div>
        <div class="box">
          <i class="fas fa-bullhorn"></i>
          <h3>safty guide</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore
            commodi earum, quis voluptate exercitationem ut minima itaque iusto
            ipsum corrupti!
          </p>
        </div>
        <div class="box">
          <i class="fas fa-globe-asia"></i>
          <h3>around the world</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore
            commodi earum, quis voluptate exercitationem ut minima itaque iusto
            ipsum corrupti!
          </p>
        </div>
        <div class="box">
          <i class="fas fa-plane"></i>
          <h3>fastest travel</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore
            commodi earum, quis voluptate exercitationem ut minima itaque iusto
            ipsum corrupti!
          </p>
        </div>
        <div class="box">
          <i class="fas fa-hiking"></i>
          <h3>adventures</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore
            commodi earum, quis voluptate exercitationem ut minima itaque iusto
            ipsum corrupti!
          </p>
        </div>
      </div>
    </section>

    <!-- services section ends -->

    
    <!-- contact section starts  -->

    <section class="contact" id="contact">
      <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
        <span class="space"></span>
        <span>u</span>
        <span>s</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="../images/contact-img.svg" alt="" />
        </div>

        <form action="">
          <div class="inputBox">
            <input type="text" placeholder="name" />
            <input type="email" placeholder="email" />
          </div>
          <div class="inputBox">
            <input type="number" placeholder="number" />
            <input type="text" placeholder="subject" />
          </div>
          <textarea
            placeholder="message"
            name=""
            id=""
            cols="30"
            rows="10"
          ></textarea>
          <input type="submit" class="btn" value="send message" />
        </form>
      </div>
    </section>

    <!-- contact section ends -->

    <!-- footer section  -->

    <section class="footer">
      <div class="box-container">
        <div class="box" >
          <h3>about us</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
            quas magni pariatur est accusantium voluptas enim nemo facilis sit
            debitis.
          </p>
        </div>
        <div class="box">
          <h3>branch locations</h3>
          <a href="#">Mathura</a>
          <a href="#">Dehradun</a>
          <a href="#">Delhi</a>
          <a href="#">Mumbai</a>
        </div>
        
        <div class="box">
          <h3>follow us</h3>
          <a href="#">facebook</a>
          <a href="#">instagram</a>
          <a href="#">twitter</a>
          <a href="#">linkedin</a>
        </div>
      </div>

      <h1 class="credit">
        created by <span> Vaibhav Sharma </span> | all rights reserved!
      </h1>
    </section>




    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>
</body>
</html> 