<?php
    include "index.php";
    include "connectdb.php";
    $hos = $_POST["hos"];
    $name= $_POST["name"];
    $query = 'UPDATE Hospital SET HopName = $hos WHERE Code LIKE  \%$hos\%';
    if (!mysqli_query($connection, $query)) {
        die("couldn't update hospital name");
    }
?>