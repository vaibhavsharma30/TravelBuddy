<?php
    $email=$_POST['email'];
    $destination=$_POST['destination'];
    $numb=$_POST['numb'];
    $date=$_POST['date'];
    
    $message = 'Congratulation !! your tickets successfully booked' ;

    mail($email, $destination, $message);
?>