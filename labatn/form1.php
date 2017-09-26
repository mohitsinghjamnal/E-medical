<html>
<body>
<form name="f1" action="form1.php" method="post">
enter name<input type="text" name="t1"><br>
enter contact number<input type="text" name="t2"><br>
enter email id<input type="text" name="t3"><br>
enter password<input type="password" name="t4"><br>
enter hospital id<input type="text" name="t5"><br>
enter department<input type="text" name="t6"><br>
<input type="submit" name="b1" value"register">
</form>
<?php
if(isset($_POST['b1']))
{
$t=0;
if(!empty($_POST['t1']))
{
if(ctype_alpha($_POST['t1']))
{
$a=$_POST['t1'];
}
else
{
echo"name should be alphabets<br>";
}
}
else
{
echo"name should not be empty<br>";
}
if(!empty($_POST['t2']))
{
if(ctype_digit($_POST['t2']))
{
$b=$_POST['t2'];
}
else
{
echo"contact number should contain only digits<br>";
}
}
else
{
echo"contact number should not be empty<br>";
}
if(!empty($_POST['t3']))
{

$c=$_POST['t3'];

}
else
{
echo"email id should not be empty<br>";
}
if(ctype_alnum($_POST['t4']))
{
$d=$_POST['t4'];
}
else
{
echo"password should contain only alphabets and numerics<br>";
}
if(!empty($_POST['t5']))
{
if(ctype_digit($_POST['t5']))
{
$e=$_POST['t5'];
}
else
{
echo"hospital id should contain only digits<br>";
}
}
else
{
echo"hospital id should not be empty<br>";
}
$f=$_POST['t6'];
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
if($t==0)
{
$cmd="insert into labattendent_info values('$a','$b','$c','$d','$e','$f')";  
if($r=$con->query($cmd)==true)
{
echo"record inserted";
header('location:log.php');
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
</head>
</body>
</html>