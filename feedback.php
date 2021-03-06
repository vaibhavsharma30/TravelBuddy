
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=\, initial-scale=1.0" />
    <title>FeedBack</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
  
    <section>
        <!-- header section starts  -->

        <header>
            <div id="menu-bar" class="fas fa-bars"></div>

            <a href="#" class="logo"><span>T</span><small>ravel</small><span>B</span><small>uddy</small></a>

            <nav class="navbar">
                <a href="../index.php/">Home</a>
                <a href="../book.php/">Book</a>
                <a href="../index.php/#packages">Packages</a>
                <a href="../index.php/#services">Services</a>
                <a href="#review">Feedback/Review</a>
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
                <input type="password" class="box" placeholder="enter your password" />
                <input type="submit" value="login now" class="btn" />
                <input type="checkbox" id="remember" />
                <label for="remember">remember me</label>
                <p>forget password? <a href="#">click here</a></p>
                <p>don't have and account? <a href="#">register now</a></p>
            </form>
        </div>
    </section>

    <!-- review section starts  -->

    <section class="review" id="review">
        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>

        <div class="swiper-container review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <img src="../images/user.png" alt="" />
                        <h3>Kartik Sharma</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                            adipisci quisquam sunt nesciunt fugiat odit minus illum
                            asperiores dolorum enim sint quod ipsam distinctio molestias
                            consectetur ducimus beatae, reprehenderit exercitationem!
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="../images/user.png" alt="" />
                        <h3>Aadvik Sharma</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                            adipisci quisquam sunt nesciunt fugiat odit minus illum
                            asperiores dolorum enim sint quod ipsam distinctio molestias
                            consectetur ducimus beatae, reprehenderit exercitationem!
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="../images/user.png" alt="" />
                        <h3>Nitin</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                            adipisci quisquam sunt nesciunt fugiat odit minus illum
                            asperiores dolorum enim sint quod ipsam distinctio molestias
                            consectetur ducimus beatae, reprehenderit exercitationem!
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="../images/user.png" alt="" />
                        <h3>Vaibhav sharma</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                            adipisci quisquam sunt nesciunt fugiat odit minus illum
                            asperiores dolorum enim sint quod ipsam distinctio molestias
                            consectetur ducimus beatae, reprehenderit exercitationem!
                        </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section starts  -->

    <section class="contact" id="contact">
        <h1 class="heading">
            <span>f</span>
            <span>e</span>
            <span>e</span>
            <span>d</span>
            <span>b</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
        </h1>

        <div class="row">
            <div class="image" style="float: left;">
                <img src="../images/feedback.png" alt="" />
            </div>

            <form name="frmreg" method="post" action="../feed.php">
                <div class="inputBox">
                    <input type="text" placeholder="name" name="name" />
                    <input type="email" placeholder="email" name="email" />
                    <input type="number" placeholder="number" name="number" />
                </div>
                <div class="inputBox">

                    <h1 style="margin-top: 17px; ">Give Us Rating </h1>
                    <input type="range" name="rating" min="1" max="5">
                </div>

                <textarea placeholder="Write Reviews" name="review" id="" cols="20" rows="10"></textarea>
                <input type="submit" class="btn" name="submit" value="Submit" />
            </form>
        </div>
    </section>
    

    <!-- contact section ends -->

    <!-- review section ends -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="../js/script.js"></script>
</body>

</html>