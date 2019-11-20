<?php
$query = "SELECT * FROM Doctor"; 
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
	 echo $row["Fname"]. " " . $row["Lname"]. "<br>";
}
mysqli_free_result($result);
echo "</ol>";
?>
