<html>
<body>
<form name="f1" action="WELCOM.php"method="POST">
<img src="doctor1.jpg" alt=logo width=200 height=200 border=2><br>
enter doctorname<input type="text" name="t1"><br>
enter department<input type="text" name="t2"><br>
enter username<input type="text" name="t3"><br>
enter password<input type="password" name="t6"><br>
enter e-mail id<input type="text" name="t4"><br>
enter contact number<input type="text" name="t5"><br>
enter gender<input type="radio" name="r1" value="male">MALE
<input type="radio" name="r1" value="female">FEMALE<br>
enter hospital name<input type="text" name="t7"><br>
enter  speciliazer<input type="text" name="t8"><br>
enter category<input type="text" name="t9"><br>
<input type="submit" name="b1" value="insert"><br>
</form>
<?php
if(isset($_POST['b1']))
{
$d=$_POST['t1'];
$p=0;
if(! empty ($_POST['t2']))
{
if(ctype_alpha($_POST['t2']))
{
$dp=$_POST['t2'];
}
else
{
$p=1;
echo "<br> only alphabets are allowed in department<br>";
}
}
else
{
$p=1;
echo "department should not be empty";
}
if(!empty ($_POST['t3']))
{
if(ctype_alnum($_POST['t3']))
{
$u=$_POST['t3'];
}
else
{
$p=1;
echo "<br> only alphanumeric are allowed in username<br>";
}
}
else
{
$p=1;
echo "username is required";
}
if(! empty($_POST['t6']))
{
if(ctype_alnum($_POST['t6']))
{
if(strlen($_POST['t6'])>=6 &&  strlen($_POST['t6'])<=10)
{
$pw=$_POST['t6'];
}
else
{
$p=1;
echo "<br> password length between 6 to10<br>";
}
}
else
{
$p=1;
echo "<br>only alphanumerics are allowed in password<br>";
}
}
else
{
$p=1;
echo "<br>password is required<br>";
}
$e=$_POST['t4'];
if(! empty($_POST['t5']))
{
if(is_numeric($_POST['t5']))
{
if(strlen($_POST['t5'])>=10)
{
$cn=$_POST['t5'];
}
else
{
$p=1;
echo "contact num length must be greater then or equal to 10<br>";
}
}
else
{
$p=1;
echo "<br>contact number only contains numbers<br>";
}
}
else
{
$p=1;
echo "contact number is required<br>";
}
$g=$_POST['r1'];
$h=$_POST['t7'];
$s=$_POST['t8'];
$c=$_POST['t9'];
{
$con=new mysqli("localhost","root","","emedical");
$cmd="insert  into doc_info values('$d','$dp','$u','$pw','$e','$cn','$g','$h','$s','$c' )";
if($con==true)
{
if($con->query($cmd)==true)
{
$cmd1="insert  into doc_login values('$u','$pw','$dp')";
if($con->query($cmd1)==true)
{
echo "one record inserted";
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
}
}
}
?>
</body>
</html>