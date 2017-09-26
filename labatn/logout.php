<h2>
<?php
session_start();
session_destroy();
echo"u r successfully logged out";
echo"<br><a href=log.php>login again</a>";
?>
</h2>