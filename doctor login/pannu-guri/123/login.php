<html>
<body>
<form name="f1" action="login.php"method="POST">
<img src="imag1.jpg" alt=logo width=200 height=200 border=2><br>
enter username<input type="text" name="t1"><br>
enter password<input type="password" name="t2"><br>
enter department<select name="t3"><br>
<option>emergency</option>
<option>nursing</option>
<option>labortary medician and pathology</option>
<option>infectious diseases</option>
<option>family medicine</option>
<option>pharmaceutical services</option>
<option>surgery</option>
<option>heart services</option>
</select><br>
<input type="submit" name="b1" value="login"><br>
<a href="welcom.php">new user click here</a><br>
</form>
<?php
if(isset($_POST['b1']))
{
$u=$_POST['t1'];
$p=$_POST['t2'];
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
$cmd="select  *  from doc_login where username='$u' and password='$p' ";
if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{ 
session_start();
$_SESSION['u']=$u;
header('location:doc_home.php');
}
}
else
{
echo "invalid username and password";
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
?>
</body>
</html>