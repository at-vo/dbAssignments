<!-- Dat Vo 250983323-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dat Vo's (250983323) CS3319 assignment 3</title>
<link rel="stylesheet" type ="text/css"
href="css/style.css">
</head>
<body>
<?php 
include 'connectdb.php';
?>
<h1>Hospital Databases</h1>
<div class = "container">
    <div class="getDocBox">

<!--List all the doctor's first name and last name in alphabetical order by last name OR by first name-->

        <h2>Here are the list of Doctors we have: </h2>
            <form action="getDoctors.php" method="post">
                Order by
                <input type="radio", name ="by", value="Fname"> First name 
                <input type="radio", name ="by", value="Lname"> Last name <br>
                Order in 
                <input type="radio", name ="in", value="ASC"> Ascending
                <input type="radio", name ="in", value="DESC"> Descending <br>
                <input type="submit", value="show Doctors"> <br>
            </form>
    </div>
</div>


<br />

<div class = "container">
    <div class="getDocBox">
        <h2> List all the doctors who were licensed before a given date </h2>
        <p>
        <form action="docDate.php" method="post">
            <input type="date" name="docDate">
            <input type="submit" value = "get Doctors"> <br>
        </form>
        </p>
    </div>
</div>

<div class = "container">
    <div class="getDocBox">
    <h2> user to enter a new doctor </h2>
    <p>
        <form action="addDoc.php" method="post">
            Doctor's First Name: <input type="text" name="Fname"><br>
            Doctor's Last Name: <input type="text" name="Lname" ><br>
            Hospital: <br>
            <input type="radio", name ="hos", value="BBC"> BBC 
            <input type="radio", name ="hos", value="DDE"> DDE
            <input type="radio", name ="hos", value="ABC"> ABC <br>
            Doctor's License Number (4 Characters):
            <input type="text" name="license"><br>
            Doctor's Specialty:
            <input type="text" name="spec"><br>
            License Date:
            <input type="date" name="date"><br>
            <input type="submit" value = "add Doctor"> <br>
        </form>
    </p>
    </div>
</div>

<div class = "container">
    <div class="getDocBox">
    <h2> user to delete an existing doctor </h2>
    <p>
        <form action="showDocs.php" method="post">
        <input type="submit" value = "show current doctors"> <br>
        </form>

        <form action="delDoc.php" method="post">
        enter doctor to delete (4 char id): 
        <input type="text" name="del"><br>
        <input type="submit" value = "delete"> <br>
        </form>

    </p>
    </div>
</div>

<div class="HosBox">

<h2> Allow the user to update a hospital's name.  </h2>
    <p>
        <form action="upHos.php" method="post">
        enter hospital name to update: 
        <input type="text" name="hos"><br>
        enter new hospital name:
        <input type="text" name="name"><br>
        <input type="submit" value = "update"> <br>
        </form>
    </p>
</div>


<!-- List all the hospital names and the first name and last
 name of the head doctor of each hospital and the doctor's start date as head,
 in alphabetical order by hospital name.  -->
<div class="HosBox">
    <h2> List all the hospital names and head doctor.</h2>
    <p>
        <form action="showHos.php" method="post">
        <input type="submit" value = "hospitals"> <br>
        </form>
    </p>
</div>


<div class="PatBox">
    <h2>  select a patient  </h2>
    <p>
        <form action="getPat.php" method="post">
        enter patient OHIP <input type="number" name="pat"><br>
        <input type="submit" value = "Patient"> <br>
        </form>
    </p>
</div>

<div class="PatBox">
<!--Allow the user to assign a doctor to treat a patient (show the patients name 
when the user does this) or stop a doctor from treating a patient. -->
<h2>  Assign Doctor to Treat or Stop treating a patient  </h2>
    <p>
        <form action="treat.php" method="post">
        treat or stop treating? <input type="radio" name="treat" value="treat"> treat
        <input type="radio" name="treat" value="stop"> stop<br>
        doctor license:<input type="text" name="doc"><br>
        patient OHIP:<input type="text" name="pat"><br>
        <input type="submit" value = "Patient"> <br>
        </form>
    </p>
</div>

<div class="getDocBox">

    <!--Output the first and last name of any doctor who has no patients. -->
    <h2> Doctors without patients </h2>
    <p>
        <form action="LazyDocs.php" method="post">
        <input type="submit" value = "LazyDocs"> <br>
        </form>
    </p>

</div>

</body>
</html>
