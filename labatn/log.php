<html>
<body>
<h1>
<form name="f1"action="log.php"method="post">
username<input type="text"name="t1">
password<input type="password" name="t2"><br>
<input type="submit"name="b1"value="login"><br>
<a href=form1.php>Lab Attnd signup</a>
</form>
<?php
session_start();
if(isset($_POST['b1']))
{
$u=$_POST['t1'];
$p=$_POST['t2'];
$_SESSION['u']=$u;
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
	$cmd="select * from labattendent_info where Email_Id='$u' and password='$p'";
	if($r=$con->query($cmd))
	{
	if($r->num_rows>0)
	{
		
header('location:welcome.php');
	}
	else
	{
		echo "invalid emailid or password";}}
}}
?>
</h1>
</body>
</html>