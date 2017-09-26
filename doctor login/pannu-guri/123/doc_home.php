<html>
<body>
<h1>
<?php
session_start();
$u=$_SESSION['u'];
echo "welcome doctor " .$u. "<br>";
echo "<br>";
echo "<form name=f1 action=doc_home.php method=POST>
<input type=submit name=b1 value=VIEW APPOINTMENT><br>
<input type=submit name=b2 value=PROFILE INFO><br></form>";
if(isset($_POST['b2']))
{
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
$cmd="select *  from doc_info where username='$u' ";
if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{ 
echo "<form name=f2 action=doc_home.php method=POST>
doctorname<input type=text name=t1 value=$rw[0]><br>
department<input type=text name=t2  value=$rw[1]><br>
username<input type=text name=t3 value=$rw[2]><br>
password<input type=password name=t4 value=$rw[3]><br>
e-mail id<input type=text name=t5 value=$rw[4]><br>
contact number<input type=text name=t6 value=$rw[5]><br>
hospital name<input type=text name=t7 value=$rw[6]><br>
speciliazer<input type=text name=t8 value=$rw[7]><br>
category<input type=text name=t9 value=$rw[8]><br>
<input type=submit name=b3 value=update></form>";
}
}
else
{
echo "no record found";
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
if(isset($_POST['b3']))
{
$d=$_POST['t1'];
$dp=$_POST['t2'];
$u=$_POST['t3'];
$pw=$_POST['t4'];
$e=$_POST['t5'];
$cn=$_POST['t6'];
$h=$_POST['t7'];
$s=$_POST['t8'];
$c=$_POST['t9'];
if(! empty ($_POST['t2']))
{
if(ctype_alpha($_POST['t2']))
{
$dp=$_POST['t2'];
}
else
{
echo "<br> only alphabets are allowed in department<br>";
}
}
else
{
echo "department should not be empty";
}
if(! empty ($_POST['t3']))
{
if(ctype_alpha($_POST['t3']))
{
$u=$_POST['t3'];
}
else
{
echo "<br> only alphabets are allowed in username<br>";
}
}
else
{
echo "username is required";
}
if(! empty($_POST['t4']))
{
if(ctype_alnum($_POST['t4']))
{
if(strlen($_POST['t4'])>=6 && strlen($_POST['t4'])<=10)
{
$pw=$_POST['t4'];
}
else
{
echo "<br> password length between 6to10<br>";
}
}
else
{
echo "<br>only alphanumerics are allowed in password<br>";
}
}
else
{
echo "<br>password is required<br>";
}
if(! empty($_POST['t6']))
{
if(is_numeric($_POST['t6']))
{
if(strlen($_POST['t6'])>=10)
{
$cn=$_POST['t6'];
}
else
{
echo "contact num length must be greater then or equal to 10<br>";
}
}
else
{
echo "<br>contact number only contains numbers<br>";
}
}
else
{
echo "contact number is required<br>";
}
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
$cmd="update doc_info set dname='$d',department='$dp',
emailid='$e',contactno='$cn',hospitalname='$h',specilizer='$s',category='$c' where username='$u' ";
if($con->query($cmd)==true)
{
echo "information updated";
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
</h1>
</body>
</html>