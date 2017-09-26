<html>
<body>
<form name="f1" action="login.php"method="POST">
<img src="doctor1.jpg" alt=logo width=200 height=200 border=2><br>
enter doctorname<input type="text" name="t1"><br>
enter department<input type="text" name="t2"><br>
enter username<input type="text" name="t3"><br>
enter e-mail id<input type="text" name="t4"><br>
enter contact number<input type="text" name="t5"><br>
enter gender<input type="radio" name="r1" value="male">MALE
<input type="radio" name="r1" value="female">FEMALE<br>
enter hospital name<input type="text" name="t7"><br>
enter  speciliazer<input type="password" name="t8"><br>
enter category<input type="text" name="t9"><br>
<input type="submit" name="b1" value="insert"><br>
</form>
<?php
if(isset($_POST['b1']))
{
$d=$_POST['t1'];
$dp=$_POST['t2'];
$u=$_POST['t3'];
$e=$_POST['t4'];
$cn=$_POST['t5'];
$g=$_POST['t6'];
$h=$_POST['t7'];
$s=$_POST['t8'];
$c=$_POST['t9'];
$con=new mysqli("local host","root","","E medical");
if($con==true)
{
$cmd="insert  into doc_info values('$d','$dp','$u','$e','$cn','$g','$h','$s','$c' )";
if($con->query($cmd)==true)
{
echo "one record inserted";
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
?>
</body>
</html>