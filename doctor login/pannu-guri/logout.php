<?php
session_start();
session_destroy();
echo"you have successfully logged out";
echo"<br><a href=login.php>LOGIN AGAIN</a>";
?>
