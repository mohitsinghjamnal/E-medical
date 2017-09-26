<html>
<body>
<form name="f1" action="cont.php" method="post">
User name<input type="text" name="t1"><br>
E-mail<input type="text" name="t2"><br>
Message<input type="text" name="t3"><br>
<input type="submit" name="b1" value="register"><br>
</form>
<?php
if(isset($_POST['b1']))
{
$t=0;
if(!empty($_POST['t1']))
{
if(ctype_alpha($_POST['t1']))
{
$u=$_POST['t1'];
}
else
{
$t=1;
echo"only alphabet are allowed";
}
}
else
{
$t=1;
echo"user name is required<br>";
}
if(!empty($_POST['t2']))
{
$e=$_POST['t2'];
}
else
{
$t=1;
echo"username is required<br>";
}
if(!empty($_POST['t3']))
{
$m=$_POST['t3'];
}
else
{
$t=1;
echo"password is required<br>";
}
if($t==0)
{
$con=new mysqli("localhost","root","","riccs");
if($con==true)
{
$cmd="insert into contact values('$u','$e','$m')";
if($con->query($cmd)==true)
{
echo"message send";
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
}
?>
</body>
</html>