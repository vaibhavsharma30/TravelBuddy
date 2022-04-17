<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $destination=$_POST['destination'];
    $numb=$_POST['numb'];
    $date=$_POST['date'];


if(isset($_POST['submit'])){
$serv_name = 'localhost';
$connect=mysqli_connect($serv_name,'root','','travelbuddy');//("server name,"username","password","database name" )
if(!$connect)
{
    echo "not connected <br>";
}

if(!mysqli_select_db($connect,'travelBuddy'))
{
    echo "db not selected";
}




$insert_query = "INSERT INTO book(Name,email,destination,numb,date) VALUES('$name','$email','$destination','$numb','$date')";
if(mysqli_query($connect,$insert_query))
{
    echo "<h1 style=  margin-left:520px;>Successfully Booked tour ! </h1><br>";
    echo "<h2 style=  margin-left:390px;>For $numb peoples on date: $date to Destination : $destination  </h2><br>";
    echo "<h2 style=  margin-left:475px;>Booking Done by Mr/ms. $name  </h2><br>";
    //header is used to redirect back to html or any other page 
    
    //header("refresh:3;url=feedback.php/");
    echo "<h3 style=  margin-left:570px;>Please Give us Feedback !  </h3><br>";
    echo "<a  href=../feedback.php/ style= margin-left:620px; ><input type= button name=Home value= Feedback></a>";
    echo "<h3 style=  margin-left:580px;> Go To Home Page! </h3><br>";
    echo "<a  href=../index.php/ style= margin-left:620px; ><input type= button name=Home value= Home>";
    
}
else{
    echo"not inserted";
}
}
else{
    echo"nothing";
}

    
    //$message = 'Congratulation !! your tickets successfully booked' ;

   // mail($email, $destination, $message);
?>