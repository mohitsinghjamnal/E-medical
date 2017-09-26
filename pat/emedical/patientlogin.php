<html>
<body><h2>
<img src="emedical1.jpg" height=250 width=250><br>
<form name="f1" action="patientlogin.php" method="post">
Username<input type="text" name="t1"><br>
Password<input type="password" name="t2"><br>
<input type="submit" name="b1" value="login">
<br><a href="patientreg.php">New user click here</a><br>
</form>
<?php
session_start();
if(isset($_POST['b1']))
{
if(!empty($_POST['t1']))
{
$u=$_POST['t1'];
}
else
{
echo "<br>Username required";
}
if(!empty($_POST['t2']))
{
$p=$_POST['t2'];
}
else
{
echo "<br>Password required<br>";
}
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
$cmd="select * from patientlogin where  username='$u' and password='$p'";

if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{
$_SESSION['u']=$u;
header('location:patient_home.php');
}
}
else
{
echo"Invalid username or password";
}}
else
{
echo "Query Problem";
}}
echo "Connection Problem";
}
?>
</h2>
</body>
</html> 