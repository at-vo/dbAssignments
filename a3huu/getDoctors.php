<?php
/**Dat Vo 250983323 */

  include 'index.php';
  include 'connectdb.php';
  $orderBy = $_POST["by"];
  $orderIn = $_POST["in"];

  // check nulls
  if($orderBy==NULL){
    $orderBy= "Fname";
  }
  if($orderIn==NULL){
    $orderIn = "DESC";
  }
  $query = "SELECT * FROM Doctor ORDER BY $orderBy $orderIn";
  $result=mysqli_query($con,$query);  // get result
  if (!$result) {
      die("couldn't get doctors");
    }
  if(mysqli_num_rows($result) > 0){
    echo "<br> The following are Doctors in the hospital:";
    while ($row=mysqli_fetch_assoc($result)) {  
      echo " <h4> <li>" .$row["License"] .": ". $row["Fname"] . " " . $row["Lname"] ." </h4>";  //print result
    }
    mysqli_free_result($result);  // free then check again
    echo "<form action='doctorInfo.php' method='post'>
        which doctor did you want to view? (License)
        <input type=\"text\" name=\"get\">
        <input type=\"submit\" value=\"Doctor Info\"><br/>
        </form>";
  }
  else{
    echo "no doctors in database";
  }
  mysqli_close($connection);

?>

