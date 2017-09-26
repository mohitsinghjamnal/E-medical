<?php
session_start();
echo"welcome admin   ".$_SESSION['u']."<br>";
echo"<a href=addhospital.php>ADD HOSPITAL</a><br>";
echo"<a href=adddoctor.php>ADD DOCTOR</a><br>";
echo"<a href=medicalcamps.php>MEDICAL CAMPS</a><br>";
echo"<a href=addlabtechnician.php>ADD LAB TECHNICIAN</a><br>";
echo"<a href=logout.php>signout</a>";
?>
 
