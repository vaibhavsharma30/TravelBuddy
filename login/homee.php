<?php
//$uname=$_POST['uname'];
//$passw=$_POST['pass'];


session_start();
if(isset($_SESSION['uname'])){

    //echo " <h1> Welcome,".$_SESSION['uname']."</h1>";
    if(isset($_POST['submit'])){
        
        echo"<script>alert('already Logged in')</script>";
        echo "<script> location.href ='../../index.php/'</script>";
    //header("location:../../index.php/");
    }else{
        header("location:../../book.php/");
    }

}
else{
    if(isset($_POST['submit'])){
        $uname = $_POST['uname'];
        
            $pass = $_POST['pass'];
           
            $serv_name = 'localhost';
            $connect=mysqli_connect($serv_name,'root','','travelbuddy');//("server name,"username","password","database name" )
            if(!$connect)
            {
                echo "<h1 style= margin-top:100px; margin-left:350px;>Something Went Wrong </h1><br>";
            }

            $read_query = "SELECT uname,pass FROM register WHERE uname = '$uname' ";
            $data = mysqli_query($connect, $read_query);
    
            if(mysqli_num_rows($data)>0){
                
    
                while($row = mysqli_fetch_array($data)){
                    
                    if($row['uname'] == $_POST['uname'] && $pass == $_POST['pass']){
                        $_SESSION['uname']= $uname;
                        echo "<h1 style=  margin-left:550px;>Login Successfull! </h1><br>";
                        //header("location:../index.php/");
                        header("refresh:3;url=../../index.php/");
                    }
                    else{
                        echo"<script>alert('Username & Password missmatch ')</script>";
                        echo "<script> location.href ='../index.php/.login-form-container'</script>";
                        //echo "invailid username and password ";
                       // header("refresh:5;url=login.html");
                    }
    
                }
                
            } else {
                echo "<h1 style=  margin-left:530px;>User Not registered  </h1><br>";
                header("refresh:3;url=../signup.php");    
            }
        }else{
            //header("location: ../index.php/ .login-form-container");
           // echo '<script type="text/JavaScript">
           // location.href =\'../index.php/\';    
           // let loginForm = document.querySelector(\'.login-form-container\'); 
            //    loginForm.classList.add(\'active\') 
            //    </script>';
            echo "<h1 style=  margin-left:530px;>Please Login First! </h1><br>";
            echo "<h2 style=  margin-left:440px;>Redirecting you to home page in some seconds! </h2><br>";
            header("refresh:4;url=../../index.php/.login-form-container");
        }
    
    
    
}



?>