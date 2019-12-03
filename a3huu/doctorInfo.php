<?php
/**Dat Vo 250983323 */

    include 'connectdb.php';
    include 'getDoctors.php';
    $get = $_POST["get"];
    // gets license
    $query = "SELECT * FROM Doctor WHERE License='$get'";
    $result=mysqli_query($con,$query);
    if (!$result) {
        die("couldn't get doctor");
    }
    else{
        $row=mysqli_fetch_assoc($result);
        foreach($row as $item){
            echo "<h4> ". $item . " </h4>"; //prints
        }        
    }

    mysqli_close($connection);



?>