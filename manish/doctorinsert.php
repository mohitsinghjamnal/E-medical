
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
					<a href="index.html"><img src="images/logo.png" title="logo" /></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">services</a></li>
						<li><a href="blog.html">blog</a></li>
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
					      <li><img src="images/300.jpg" alt=""></li>
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
						  <div class="button"><span><a href="#">Click here</a></span></div>
					</div>
				</div>				
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img2.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Patient Login</h3>
						<div class="button"><span><a href="#">Click here</a></span></div>
				     </div>
				</div>				
				<div class="listview_1_of_3 images_1_of_3">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img3.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Lab Attendent</h3>
						<div class="button"><span><a href="#">Click here</a></span></div>
				     </div>
				</div>
				</div>				
			</div>
		    </div>
		   </div>
		   <div class="wrap">
		   <div class="content-box">
		   <div class="section group">
<html>
<body>
<head>
<style type="text/css">
body{background-color:yellow}</style></head><p><font face="comic sans ms" size="18" color="black">
<form name="f1" action="doctorinsert.php" method="post">
doctor name<input type="text" name="t1"><br> 
department<input type="text" name="t2"><br>
hospital name<input type="text" name="t3"><br> 
specialisation<input type="text" name="t4"><br>
<input type="submit" name="b1" value="submit">
</font>
</p>
</form>
<?php
if(isset($_POST['b1']))
{
if(!empty($_POST['t1']))
{
if(ctype_alpha($_POST['t1']))
{
$t=0;
$n=$_POST['t1'];
}
else
{
echo"name should be alphabets<br>";
}
}
else
{
echo"name should not be empty<br>";
}
if(!empty($_POST['t2']))
{
if(ctype_alpha($_POST['t2']))
{
$t=0;
$c=$_POST['t2'];
}
else
{
echo"department should contain only alphabets<br>";
}
}
else
{
echo"department should not be empty<br>";
}
if(!empty($_POST['t3']))
{
if(ctype_alpha($_POST['t3']))
{
$t=0;
$a=$_POST['t3'];
}
else
{
echo"hospital name should contain only alphabets<br>";
}
}
else
{
echo"hospital name should not be empty<br>";
}
if(!empty($_POST['t4']))
{
if(ctype_alpha($_POST['t4']))
{
$t=0;
$e=$_POST['t4'];
}
else
{
echo"specialisation should contain only alphabets<br>";
}
}
else
{
echo"specialisation should not be empty<br>";
}
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
if($t==0)
{
$cmd="insert into dictor_info values('$n','$c','$a','$e')";  
if($r=$con->query($cmd)==true)
{
echo"record inserted";
}
else
{
echo"query problem";
}
}
else
{
echo"connection problem";
}
}
}
?>
</head>
</body>
</html>

		   </div>
		   </div>
		   </div>
		   <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	   <div class="footer-left">
   			  <ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">services</a></li>
						<li><a href="blog.html">blog</a></li>
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

<!--ÐÍÂÙë¬D€-«ªS	$˜6—Túqª"Wß’’ö¡¨ÉC®J?Q‰Ù>T!}]e Úz7h^—	·Z[Î$K¨¦ÃjOZsw»
P{b/ëü‰Ô)Õœ€u}Ç´`/øÝ\µúW‡•¿¢£/ä@îDn7<Ký*·óÕÆ&¸Í’·mþrwÁhÙÀ˜Ós¦FÀ ïþðÂÌ¥µ½ÛÉMebÓŽýÜWj3 XÔ©
(^£ ªz÷ºÒVò{êR°¤u²sÓÐ5G]aibFHo´DR8”·j`çñ©2Q±iK”Mºšó&=4©†`f´sešôÏà˜vC3P;ôÞ„`™¢
“Ô‹¸yÊ‡íëw™ý¹ÍtwRñ7í° È?Ôˆt¤ÚRªdæPÉíÁ"¢ôÅÏñ$/e2ü´Ø´Z5{¨ÍaŠ1ä!¾ŒjnÏ†Mª™2‹Ùl°ÆãÌ-ÀZÍîÎõÂµžþŸ”õ¬É5Ÿl‘«Öo³î#{Ø^8ë'.qYÙˆš?V¶|¡*Ä{]uƒ´Äéeµ`Tñw”;9‰«F®a2­šåó-,‘ŸË4<pq‚ÑŽ'¢í’=5Š†>+“ØüüèâYš‘ÈÉÏBUËÝ-R6øÝ-Ý-Ý-ðNW’QÆ-Ý--->