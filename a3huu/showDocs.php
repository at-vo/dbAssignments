<?php
/**Dat Vo 250983323 */

    include 'index.php';
    include 'connectdb.php';       
    $query = "SELECT * FROM Doctor ORDER BY Fname DESC"; // get query
    $result=mysqli_query($con,$query);
    if (!$result) {
        die("couldn't get doctors");
        }
    if(mysqli_num_rows($result) > 0){
        echo "<br> The following are Doctors in the hospital: <br>";
        while ($row=mysqli_fetch_assoc($result)) {
            foreach ($row as $item) {
                echo $item ." ";    //print
            }
            echo "<br>";
        }
        mysqli_free_result($result);    //free
    }
else{
    echo "no doctors in database";
}

mysqli_close($connection);  // close

    

?>