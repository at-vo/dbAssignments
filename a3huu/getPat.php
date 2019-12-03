<?php
    include "index.php";
    include "connectdb.php";
    $pat = $_POST["pat"];
    $query = 'SELECT * FROM Patient WHERE OHIP='.$pat;
    $result=mysqli_query($con,$query);
    if (!$result) {
        die("invalid OHIP number.");
    }else if(mysqli_num_rows($result) == 1){
        $query = "SELECT *
                    FROM Assigned 
                    INNER JOIN Doctor on Doctor.License = Assigned.License
                    INNER JOIN Patient on Assigned.OHIP=Patient.OHIP
                    WHERE Patient.OHIP=$pat";


        $result=mysqli_query($con,$query);
        // while ($row=mysqli_fetch_assoc($result)) {
        //     echo $row['Patient.Fname'] ." ". $row['Patient.Lname'] ."--". $row['Doctor.Fname'] ." ". $row['Doctor.Lname'];
        //     echo "<br>";
        // }
        $row=mysqli_fetch_assoc($result);
        foreach ($row as $key) {
            echo $key. " ";
        }
    }
?>