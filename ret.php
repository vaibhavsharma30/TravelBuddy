<?php

$serv_name = 'localhost';
$connect=mysqli_connect($serv_name,'root','','travelbuddy');//("server name,"username","password","database name" )
if(!$connect)
{
    echo "not Successfull <br>";
}


if(isset($_POST['search'])){
    $search=$_POST['search'];
        $muConnection = mysqli_connect($serv_name,'root','','travelbuddy');
        $read_query = "SELECT * FROM suggestion where city==$search";
        $data = mysqli_query($muConnection, $read_query);

        if(mysqli_num_rows($data)>0){
            echo "<table style=' border: 2px solid black'>
            <tr>
            <th>name</th>
            <th>email</th>
            <th>city</th>
            <th>state</th>
            <th>city_review</th>
            <th>hotel</th>
            <th>restaurant</th>
            <th>more</th>
            ";

            while($row = mysqli_fetch_array($data)){
                echo"<tr>";
                echo "<td>".$row['name']."</td> <br>";
                echo "<td>".$row['email']."</td> <br>";
                echo "<td>".$row['city']."</td> <br>";
                echo "<td>".$row['state']."</td> <br>";
                echo "<td>".$row['city_review']."</td> <br>";
                echo "<td>".$row['hotel']."</td> <br>";
                echo "<td>".$row['restaurant']."</td> <br>";
                echo "<td>".$row['more']."</td> <br>";
                echo "</tr>";

            }
            
        } else {
            echo "Record Not found";
        }
    }


?>