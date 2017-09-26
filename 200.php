<?php
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
$cmd="select * from home_remedies";

if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
while($rw=$r->fetch_array())
{
echo"<b>Disease   :-<b><u>" .$rw[0]."</u></b><br>";
echo"Precaution :-".$rw[1]."<br><br>";
}
}
else
{
echo"no data found";
}}
else
{
echo "Query Problem";
}}
else
{
echo "Connection Problem";
}
?>