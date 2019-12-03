<?php
    include "index.php";
    include "connectdb.php";
    $hos = $_POST["hos"];
    $name= $_POST["name"];
    // query
    $query = "UPDATE Hospital SET Name = '$name' WHERE Code = '$hos'";
    $result = mysqli_query($con, $query);
    if (!$result) {
        die("couldn't update hospital name");
    }else{
        echo " <h4> hospital updated</h4> ";
    }
    mysqli_close($connection);

?>