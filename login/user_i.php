<?php
if(isset($_POST['submit'])){
$serv_name = 'localhost';
$connect=mysqli_connect($serv_name,'root','','travelbuddy');//("server name,"username","password","database name" )
if(!$connect)
{
    echo "<h1 style= margin-top:100px; margin-left:350px;>Something Went Wrong </h1><br>";
}

if(!mysqli_select_db($connect,'travelBuddy'))
{
    echo "db not selected";
}

$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];



$insert_query = "INSERT INTO register(uname,email,pass) VALUES('$uname','$email','$pass')";
if(mysqli_query($connect,$insert_query))
{
    echo"<h1 style= margin-left:540px ;    > Registered Sucessfully!!</h1><br>";
    //header is used to redirect back to html or any other page 
    
    header("refresh:3;url=../index.php/");
    //echo "<a  href=../index.php/ style= margin-left:650px; ><input type= button name=Home value= Home>";
}
else{
    echo"not inserted";
}
}
else{
    echo"nothing";
}
?>