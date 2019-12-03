
<?php
$dbhost = "localhost";
$dbuser= "";
$dbpass = "cs3319";
$dbname = "dvo9asn3"; 
$con = new mysqli($dbhost, $dbuser,$dbpass,$dbname);
if (mysqli_connect_errno()) {
     die("database connection failed :" .
     mysqli_connect_error() .
     "(" . mysqli_connect_errno() . ")"
         );
    }
else{
   // echo "sucessful db connect";
}
?>
