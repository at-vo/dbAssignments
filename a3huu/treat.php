<?php
    include "index.php";
    include "connectdb.php";
    $treat = $_POST["treat"];
    $pat = $_POST["pat"];
    $doc = $_POST["doc"];


if ($treat == "treat"){ //query for treat
    $query = "INSERT INTO Assigned values('$pat','$doc')";
    $result=mysqli_query($con,$query);
    if (!$result) {
        die("treatment failed. patient might have died.");
    }
    else{
        echo "treatment successful <br>";
    }
}else{  //query for stop treating
    $query = "DELETE FROM Assigned WHERE OHIP='$pat'";
    $result=mysqli_query($con,$query);
    if (!$result) {
        die("stopping treatment failed. the patient's probably still alright.");
    }
    else{
        echo "<h4> stopping treatment successful. onto the next one <br> </h4> ";
    }
}
mysqli_close($connection);

?>