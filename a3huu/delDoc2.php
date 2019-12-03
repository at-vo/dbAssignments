<?php
include 'index.php';
include 'connectdb.php';
include 'delDoc.php';
if($_POST['confirm'] == 'Yes'){
    $result=mysqli_query($con,$query);
    if (!$result) {
        $query = "DELETE FROM Doctor WHERE License=$doc ON CASCADE ";
        echo "doctor delete";
    }
}else{
    // do nothing
}

?>