<?php
    include 'index.php';
    include 'connectdb.php';
    include 'getDoctors.php';
    include 'getDoctors2.php';
    $get = $_POST["get"];
    $query = "SELECT * FROM Doctor WHERE License=$arr[$get]";
    $result2=mysqli_query($con,$query);
    if (!$result2) {
        die("couldn't get doctor");
    }
    else{
        $row=mysqli_fetch_assoc($result);
        foreach($row as $item){
            echo $item . " ";
        }        
    }




?>