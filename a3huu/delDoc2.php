<?php
/**Dat Vo 250983323 */

include 'connectdb.php';
include 'delDoc.php';
if($_POST['confirm'] == 'Yes'){
    $result=mysqli_query($con,$query);
    if (!$result) {
        //statement to delete on cascade
        $query = "DELETE FROM Doctor WHERE License='$doc' ON CASCADE ";
        echo "doctor delete";
    }
}else{
    // do nothing
}
mysqli_close($connection);

?>