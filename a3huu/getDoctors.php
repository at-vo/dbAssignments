<?php
  $arr=array();
  include 'index.php';
  include 'connectdb.php';
  $orderBy = $_POST["by"];
  $orderIn = $_POST["in"];
  if($orderBy==NULL && $orderIn!=NULL){
    $query = "SELECT * FROM Doctor ORDER BY Fname $orderIn";
  }else if(!$orderBy==NULL &&$orderIn==NULL){
    $query = "SELECT * FROM Doctor ORDER BY $orderBy DESC";
  }
  $query = "SELECT * FROM Doctor ORDER BY $orderBy $orderIn";
  $result=mysqli_query($con,$query);
  if (!$result) {
      die("couldn't get doctors");
    }
  if(mysqli_num_rows($result) > 0){
    $count = 0;
    echo "<br> The following are Doctors in the hospital:";
    while ($row=mysqli_fetch_assoc($result)) {
      $count++;
      echo "<li>" .$count .". ". $row["Fname"] . " " . $row["Lname"];
      $arr[$count] = $row["License"];
    }
    mysqli_free_result($result);
    echo "would you like to show doctor info?";
    echo "<form action=\"getDoctors2.php\" method=\"post\">
        Do you want to view doctor info?
        <input type=\"submit\" name=\"confirm\" value=\"Yes\">
        <input type=\"submit\" name=\"confirm\" value=\"No\"><br/>
        </form>";

  }
  else{
    echo "no doctors in database";
  }


  function gett(){
    ;
  }


?>

