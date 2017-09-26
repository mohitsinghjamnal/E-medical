<h1>
<?php
session_start();
$u=$_SESSION['u'];
echo"welcome user,   ".$u."<br>";
echo"<br>";
echo"<a href=logout.php>signout</a>";
?>
</h1>