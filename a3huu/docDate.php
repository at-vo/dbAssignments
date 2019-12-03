
<?php
  include 'index.php';
  include 'connectdb.php';
  $date = $_POST["docDate"];
  $query = "SELECT * FROM Doctor WHERE LicenseDate >= $date";
  $result=mysqli_query($con,$query);
  if (!$result) {
      die("couldn't get doctors");
    }
  if(mysqli_num_rows($result) > 0){
    echo "<br> The following are Doctors in the hospital:";
    while ($row=mysqli_fetch_assoc($result)) {
      echo "<li>". $row["Fname"] . "     " . $row["Lname"]. ", ". $row["Specialty"] . ", ". $row["LicenseDate"];
    }
    mysqli_free_result($result);
  }
  else{
    echo "no doctors in database licensed before ". $date;
  }

?>