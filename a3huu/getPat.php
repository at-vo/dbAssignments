<?php
/**Dat Vo 250983323 */

    include "index.php";
    include "connectdb.php";
    $pat = $_POST["pat"];
    $query = "SELECT * FROM Patient WHERE OHIP='$pat'"; //query
    $result=mysqli_query($con,$query);
    if (!$result) {
        die("invalid OHIP number.");
    }else if(mysqli_num_rows($result) == 1){
        // get statement
        $query = "SELECT Patient.Fname,Patient.Lname,Doctor.Fname,Doctor.Lname FROM Assigned INNER JOIN Doctor on Doctor.License = Assigned.License INNER JOIN Patient on Assigned.OHIP=Patient.OHIP where Patient.OHIP like $pat";
        $result=mysqli_query($con,$query);
        while ($row=mysqli_fetch_assoc($result)) {
            foreach ($row as $key) {
                echo $key." ";  //  print
            }
            echo "<br>";
        }
    }
    mysqli_close($connection);

?>