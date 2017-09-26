
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>medicare Website Template | Home :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" title="logo" /></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">services</a></li>
						<li><a href="blog.php">blog</a></li>
						<li><a href="contact.php">contact</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		<div class="clear"> </div>
			<!--start-image-slider---->
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/200.jpg" alt=""></li>
					      <li><img src="images/300.png" alt=""></li>
					      <li><img src="images/400.jpg" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
		    <div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="wrap">
		    	<div class="section group">
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img1.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Doctor Login</h3>
						  <div class="button"><span><a href="doc_login.php">Click here</a></span></div>
					</div>
				</div>				
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img2.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Patient Login</h3>
						<div class="button"><span><a href="patientlogin.php">Click here</a></span></div>
				     </div>
				</div>				
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img3.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Lab Attendent</h3>
						<div class="button"><span><a href="lab_login.php">Click here</a></span></div>
				     </div>
				</div>
				</div>				
			</div>
		    </div>
		   </div>
		   <div class="wrap">
		   <div class="content-box">
		   <div class="section group">
			 
			  <head>
<style type="text/css">
body{background-color:#3399FF}</style>
               <form name="f1" action="doc_reg.php"method="POST">
                 <br><pre>
Enter doctorname      <input type="text" name="t1"><br>
Enter department       <input type="text" name="t2"><br>
Enter username         <input type="text" name="t3"><br>
Enter password         <input type="password" name="t6"><br>
Enter e-mail id          <input type="text" name="t4"><br>
Enter contact number<input type="text" name="t5"><br>
Enter gender	      <input type="radio" name="r1" value="male">MALE<input type="radio" name="r1" value="female">FEMALE<br>
Enter hospital name   <input type="text" name="t7"><br>
Enter  speciliazer       <input type="text" name="t8"><br>
Enter category           <input type="text" name="t9">
<table> 
<tr>
<td colspan="1"><div align="center">
<input name="b1" type="submit" class="frist" value="insert" style="width:100px">
</div></td>
</tr>
</table></pre>
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
header('location:doc_login.php');
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
		
		   </div>
		   </div>
		   </div>
		   <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	   <div class="footer-left">
   			  <ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">services</a></li>
						<li><a href="blog.php">blog</a></li>
						<li><a href="contact.php">contact</a></li>
<li><a href="login.php">Admin</a></li>
					</ul>
		   	</div>
		   	<div class="footer-right">
		   		<p>Medicare</p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>
           <div class="clear"></div>
		   <div class="footer">
		   	 <div class="wrap">
		   	   <div class="footer-left">
   			  
		   	</div>
		   	   <div class="clear"></div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

<!--ÐÍÂÙë¬D€-«ªS	$˜6—Túqª"Wß''ö¡¨ÉC®J?Q‰Ù>T!}]e Úz7h^—	·Z[Î$K¨¦ÃjOZsw»
P{b/ëü‰Ô)Õœ€u}Ç´`/øÝ\µúW‡•¿¢£/ä@îDn7<Ký*·óÕÆ&¸Í'·mþrwÁhÙÀ˜Ós¦FÀ ïþðÂÌ¥µ½ÛÉMebÓŽýÜWj3 XÔ©
(^£ ªz÷ºÒVò{êR°¤u²sÓÐ5G]aibFHo´DR8"·j`çñ©2Q±iK"Mºšó&=4©†`f´sešôÏà˜vC3P;ôÞ"`™¢
"Ô‹¸yÊ‡íëw™ý¹ÍtwRñ7í° È?Ôˆt¤ÚRªdæPÉíÁ"¢ôÅÏñ$/e2ü´Ø´Z5{¨ÍaŠ1ä!¾ŒjnÏ†Mª™2‹Ùl°ÆãÌ-ÀZÍîÎõÂµžþŸ"õ¬É5Ÿl'«Öo³î#{Ø^8ë'.qYÙˆš?V¶|¡*Ä{]uƒ´Äéeµ`Tñw";9‰«F®a2­šåó-,'ŸË4<pq‚ÑŽ'¢í'=5Š†>+"ØüüèâYš'ÈÉÏBUËÝ-R6øÝ-Ý-Ý-ðNW'QÆ-Ý--->