
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
body{background-color:#3399FF}</style></head><p><br>
<font size=5><form name="f2" action="patientreg.php" method="post"><pre>
Patient name      :<input type="text" name="t1"><br>
User name          :<input type="text" name="t2"><br>
Contact number :<input type="text" name="t3"><br>
Address              :<input type="text" name="t4"><br>
E_mail id            :<input type="text" name="t5"><br>
Password            :<input type="password" name="t6"><br>
Gender                :<input type="radio" name="r1" value=male>male<input type="radio" name="r1" value=female>female
<table> 
<tr>
<td colspan="1"><div align="center">
<input name="b1" type="submit" class="frist" value="insert" style="width:100px">
</div></td>
</tr>
</table> </pre>
</font></form>
<?php
session_start();
if(isset($_POST['b1']))
{
	$tmp=0;
if(!empty($_POST['t1']))
{
if(ctype_alpha($_POST['t1']))
{
	
$pn=$_POST['t1'];
}
else
{
	$tmp=1;
echo "<br> only alphabets allowed in user name<br>";
}
}
else
{
	$tmp=1;

echo "<br>user name required";
}
$u=$_POST['t2'];
if(!empty($_POST['t3']))
{
if(is_numeric($_POST['t3']))
{
if(strlen($_POST['t3']>=10))
{
$c=$_POST['t3'];
}
else
{
	$tmp=1;

echo "<br> contact num length must be greater then or equl to 10<br>";
}}
else
{
	$tmp=1;

echo "<br>contact num only cantains number<br>";
}}
else
{
	$tmp=1;

echo "<br> contact num is required<br>";
}
$a=$_POST['t4'];
$e=$_POST['t5'];
if(!empty($_POST['t6']))
{
if(ctype_alnum($_POST['t6']))
{
if(strlen($_POST['t6'])>=6 && strlen($_POST['t6'])<=10)
{
$p=$_POST['t6'];
}
else
{
	$tmp=1;

echo "<br>password between 6 to 10";
}}
else
{
	$tmp=1;

echo "<br> only al_num are allowed in password<br>";
}}
else
{
	$tmp=1;

echo "<br>password is required<br>";
}
$g=$_POST['r1'];
if($tmp==0)
{
$con=new mysqli("localhost","root","","emedical");
$cmd="insert into patientinfo values('$pn','$u','$c','$a','$e','$p','$g')";
if($con==true)
{
if($con->query($cmd)==true)
{
$cmd="insert into patientlogin values('$u','$p')";
if($con->query($cmd))
{
echo "one record insert";
header('location:patientlogin.php');
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
<div class="section group"></div> 
</div>
</div>
</div>
<div class="wrap">
<div class="content-box">
<div class="section group"></div>
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
<p><a href="diet.php">Diet Chart</a></p>
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

