<html>
<body>
<?php 
session_start();
$u=$_SESSION['u'];
echo "Welcome user   ".$u."<br>";
echo "<br>";
?>
<form name="f1" action="patient_home.php"  method="POST">
<welcome user<input type="text" name="t1"><br>
<input type="submit" name="b1"value="Profile Info">
<input type="submit" name="b2" value="View Hospitals">
<input type="submit" name="b3" value="Take Appointment">
<input type="submit" name="b4" value="View Reports">
</form>
<?php
if(isset($_POST['b1']))
{
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
$cmd="select * from patientinfo where user_name='$u'";
if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{
echo"<form name=f1 action=patient_home.php method=post>
Patient name<input type=text name=t1 value[0]><br>
User name<input type=text name=t2 value[1]><br>
Contact number<input type=text name=t3 value[2]><br>
Address<input type=text name=t4 value[3]><br>
E_mail id<input type=text name=t5 value[4]><br>
Password<input type=PASSWORD name=t6 value[5]><br>
<input type=submit name=b1 value=update>
</form>";
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
?>
</body>
</html>