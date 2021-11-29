<?php
if(isset($_POST['submit'])){
$serv_name = 'localhost';
$connect=mysqli_connect($serv_name,'root','','travelbuddy');//("server name,"username","password","database name" )
if($connect)
{
    echo "Successfull <br>";
}
else{
    echo " no <br>";
}
if(!mysqli_select_db($connect,'travelBuddy'))
{
    echo "db not selected";
}

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$rating=$_POST['rating'];
$review=$_POST['review'];


$insert_query = "INSERT INTO feedback(Name,email,number,rating,review) VALUES('$name','$email','$number','$rating','$review')";
if(mysqli_query($connect,$insert_query))
{
    echo"data inserted";
    //header is used to redirect back to html or any other page 
    
    header("refresh:3;url=feedback.php/");
    
}
else{
    echo"not inserted";
}
}
else{
    echo"nothing";
}
?>