<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dat Vo's (250983323) CS3319 assignment 3</title>
</head>
<body>
<?php include 'connectdb.php';?>
<h1>Hospital Databases</h1>
<h2>Here are the list of Doctors we have: </h2>
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
<?php
include 'getdata.php';
?>
</body>
</html>
