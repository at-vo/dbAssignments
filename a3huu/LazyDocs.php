<?php
    include "index.php";
    include "connectdb.php";
    $query = "SELECT Doctor.Fname, Doctor.Lname FROM Doctor INNER JOIN Assigned on Doctor.License=Assgined.License WHERE Assigned.OHIP=NULL";
    $result=mysqli_query($con,$query);
    if (!$result) {
        die("looks like there aren't any lazy doctors.");
    }
    while ($row=mysqli_fetch_assoc($result)) {
        foreach ($row as $key) {
            echo $key . " ";
        }
        echo '<br>';
    }
    mysqli_free_result($result);
?>