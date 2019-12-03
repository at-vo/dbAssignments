
<?php
  include 'index.php';
  include 'connectdb.php';
  $Fname = $_POST["Fname"];
  $Lname = $_POST["Lname"];
  $hos = $_POST["hos"];
  $license = $_POST["license"];
  $spec = $_POST["spec"];
  $date = $_POST["date"];

  $query = "INSERT INTO Doctor VALUES('$license','$spec','$date','$Fname','$Lname','$hos');";
  $result=mysqli_query($con,$query);
  if (!$result) {
      die("couldn't get doctors");
    }
    else{
        echo "doctor added";
    }
  mysqli_close($connection);

?>