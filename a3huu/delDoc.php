<?php
include 'index.php';
include 'connectdb.php';
$doc = $_POST["del"];
$query = "SELECT * FROM Patient INNER JOIN Assigned on Patient.OHIP=Assigned.OHIP WHERE Assigned.License like \%$doc\%";
$result=mysqli_query($con,$query);
    if(mysqli_num_rows($result) == 0) {
        $query = "DELETE FROM Doctor WHERE License =$doc";
        $result=mysqli_query($con,$query);
        if (!$result) {
            echo "couldnt delete doctor";
        }else{
            echo "Doctor deleted";
        }
    }else if(mysqli_num_rows($result) > 0){
        while ($row=mysqli_fetch_assoc($result)) {
            echo "Doctor currently assigned to". $row["Fname"] . " " . $row["Lname"];
        }
        echo "<form action=\"delDoc2.php\" method=\"post\">
        Do you still want to delete the doctor?
        <input type=\"submit\" name=\"confirm\" value=\"Yes\">
        <input type=\"submit\" name=\"confirm\" value=\"No\"><br/>
        </form>";
    }
?>