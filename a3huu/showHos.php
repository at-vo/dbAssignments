<?php
    include "index.php";
    include "connectdb.php";
    $query = 'SELECT Hospital.Name, Doctor.Fname, Doctor.Lname, Hospital.headDate FROM Hospital INNER JOIN Doctor on Hospital.HeadOf=Doctor.License ORDER BY Hospital.Name';
    $result=mysqli_query($con,$query);
    if (!$result) {
        die("couldn't get hospital data");
    }else{
        while ($row=mysqli_fetch_assoc($result)) {
            foreach($row as $item){
                echo $item . " ";
            }
            echo "<br>";
        }
    }
?>