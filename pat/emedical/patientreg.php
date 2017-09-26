<html>
<body><h2>
<form name="f2" action="patientreg.php" method="post">
Patient name<input type="text" name="t1"><br>
User name<input type="text" name="t2"><br>
Contact number<input type="text" name="t3"><br>
Address<input type="text" name="t4"><br>
E_mail id<input type="text" name="t5"><br>
Password<input type="password" name="t6"><br>
gender<input type="radio" name="r1" value=male>male
<input type="radio" name="r1" value=female>female<br>
<input type="submit" name="b1" value="insert">
</form>
<?php
session_start();
if(isset($_POST['b1']))
{
	$tmp=0;
if(!empty($_POST['t1']))
{
if(ctype_alpha($_POST['t1']))
{
	
$pn=$_POST['t1'];
}
else
{
	$tmp=1;
echo "<br> only alphabets allowed in user name<br>";
}
}
else
{
	$tmp=1;

echo "<br>user name required";
}
$u=$_POST['t2'];
if(!empty($_POST['t3']))
{
if(is_numeric($_POST['t3']))
{
if(strlen($_POST['t3']>=10))
{
$c=$_POST['t3'];
}
else
{
	$tmp=1;

echo "<br> contact num length must be greater then or equl to 10<br>";
}}
else
{
	$tmp=1;

echo "<br>contact num only cantains number<br>";
}}
else
{
	$tmp=1;

echo "<br> contact num is required<br>";
}
$a=$_POST['t4'];
$e=$_POST['t5'];
if(!empty($_POST['t6']))
{
if(ctype_alnum($_POST['t6']))
{
if(strlen($_POST['t6'])>=6 && strlen($_POST['t6'])<=10)
{
$p=$_POST['t6'];
}
else
{
	$tmp=1;

echo "<br>password between 6 to 10";
}}
else
{
	$tmp=1;

echo "<br> only al_num are allowed in password<br>";
}}
else
{
	$tmp=1;

echo "<br>password is required<br>";
}
$g=$_POST['r1'];
if($tmp==0)
{
$con=new mysqli("localhost","root","","emedical");
$cmd="insert into patientinfo values('$pn','$u','$c','$a','$e','$p','$g')";
if($con==true)
{
if($con->query($cmd)==true)
{
$cmd="insert into patientlogin values('$u','$p')";
if($con->query($cmd))
{
echo "one record insert";
}
}
else
{
echo "query problem";
}
}
else
{
echo "connection problem";
}}
}
?>
</h2>
</body>
</html>