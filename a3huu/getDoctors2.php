<?php
  include 'index.php';
  include 'connectdb.php';
  $conf = $_POST["confirm"];
  if($conf=='Yes'){
    echo "<form action=\"doctorInfo.php\" method=\"post\">
        which doctors did you want to view?
        <input type=\"number\" name=\"get\">
        <input type=\"submit\" value=\"Doctor Info\"><br/>
        </form>";
  }else{
    // do nothing
  }
  

?>

