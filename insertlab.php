<html>
<body>
<form name="f1" action="addlabtechnician.php" method="post">
name<input type="text" name="t1"><br>
<input type="submit" value="details" name="b1">
<input type="submit" value="insert" name="b2">
</form>
<?php
if(isset($_POST['b1']))
{
$e=$_POST['t1']; 
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
$cmd="select * from labtechnician where name='$e'";
if($r=$con->query($cmd))
{
if($rw=$r->fetch_array())
{
echo"name is  ".$rw[0]."<br>";
echo"hospital  name is  ".$rw[1]."<br>";
echo"department is  ".$rw[2]."<br>";  
}
else
{
echo"no such lab attendent found";
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
if(isset($_POST['b2']))
{
header('location:labinsert.php');
}
?>
</body>
</html>
