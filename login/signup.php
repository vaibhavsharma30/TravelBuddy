<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
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
    <style>
    .signup-form-container {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 10000;
        min-height: 100vh;
        width: 100%;
        background: rgba(0, 0, 0, .7);
        display: flex;
        align-items: center;
        justify-content: center;



    }

    .signup-form-container.active {
        top: 0;
    }

    .signup-form-container form {
        margin: 2rem;
        padding: 1.5rem 2rem;
        border-radius: .5rem;
        background: #fff;
        width: 50rem;
    }

    .signup-form-container form h3 {
        font-size: 3rem;
        color: #444;
        text-transform: uppercase;
        text-align: center;
        padding: 1rem 0;
    }

    .signup-form-container form .box {
        width: 100%;
        padding: 1rem;
        font-size: 1.7rem;
        color: #333;
        margin: .6rem 0;
        border: .2rem solid rgba(0, 0, 0, .3);
        text-transform: none;
    }

    .signup-form-container form .box:focus {
        border-color: var(--orange);
        ;
    }

    .signup-form-container form #remember {
        margin: 2rem 0;
    }

    .signup-form-container form label {
        font-size: 1.5rem;
    }

    .signup-form-container form .btn {
        display: block;
        width: 100%;
    }

    .signup-form-container form p {
        padding: .5rem 0;
        font-size: 1.5rem;
        color: #666;
    }

    .signup-form-container form p a {
        color: var(--orange);
    }

    .signup-form-container form p a:hover {
        color: #333;
        text-decoration: underline;
    }

    .signup-form-container #forms-close {
        position: absolute;
        top: 2rem;
        right: 3rem;
        font-size: 5rem;
        color: #fff;
        cursor: pointer;
    }
    </style>

</head>

<body>
    <?php

  ;
  ?>
  

    <div class="signup-form-container">
        
        <form action="user_i.php" method="POST">
            <h3>Sign-Up</h3>
            
                <input type="text" class="box" placeholder="Username" name="uname" />
                <input type="email" class="box" placeholder="enter your email" name="email" />
                <input type="password" class="box" placeholder="enter your password" name="pass" />
                <input type="submit" value="Register" class="btn" name="submit" />



                <p> have an account? <a href="../index.php/">Login Now</a></p>
                <a href="../index.php/" ><input type="button" value="home" class="btn" name="home" /></a>    
        </form>
        
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="../script.js"></script>
</body>

</html>