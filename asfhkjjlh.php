<html>
<body>
<form name="f1" action="patientlogin.php" method="post">
<input type="submit" name="b1" value="view">
</form>
<?php
session_start();
if(isset($_POST['b1']))
{
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
$cmd="select * from appointments";
if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{
echo"hospital name is    ".$rw[0]."<br>";
echo"doctor name is   ".$rw[1]."<br>";
echo"patient name is   ".$rw[2]."<br>";
echo"date is   ".$rw[3]."<br>";
echo"time is  ".$rw[4]."<br>";
echo"disease is  ".$rw[5]."<br>";
echo"<a href=patientlogin.php?r=a>accept</a>&nbsp;&nbsp;";
echo"<a href=patientlogin.php?r=rj>reject</a><br>";
$_SESSION['pat_name']=$rw[2];
$_SESSION['doc_name']=$rw[1];
$_SESSION['date']=$rw[3];
$_SESSION['time']=$rw[4];
}
}
else
{
echo"no appointments";
}
}
else
{
echo"query problem";
}
}
else
{
echo"connection problem";
}
}
if(!empty($_GET['r']))
{
$pn=$_SESSION['pat_name'];
$dn=$_SESSION['doc_name'];
$dt=$_SESSION['date'];
$tm=$_SESSION['time'];
$rr=$_GET['r'];
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
if($rr=="a")
{
$cmd="insert into accept_appointments values('$pn','$dn','$dt','$tm')";
if($con->query($cmd)==true)
{
echo "Appt accepted";
}
}
else
{
$cmd="insert into reject_appointments values('$pn','$dn','$dt','$tm')";
if($con->query($cmd)==true)
{
echo "Appt rejected";
}
}
}
else
{
echo "connection problem";
}
}
?>
</body>
</html>




