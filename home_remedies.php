
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
body{background-color:#3399FF}</style></head>
<center><table width="1100px" >
<tr><th style=font-weight:bold;font-size:22px><u>Disease</u></th><th style=font-weight:bold;font-size:22px><u>Precaution</th></u></th></tr><tr>
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
echo "<th style=font-weight:bold>" .$rw[0]."  &nbsp;&nbsp;</th>";
echo "<td align=justify>".$rw[1]."</td></tr><tr><td colspan=2><hr color=black></td></tr>";
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
?></tr></table></center>
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

<!--ÄÂÄÂÄÂÄÂÄĹ¤ĂĹšDĂ˘ÂĹš-ĂĹ¤ĂĹS	$ĂÂ6Ă˘ÂÂTÄĹqĂÂĂĹ"ĂÂWÄÂĂ˘ÂÂĂ˘ÂÂÄĹĂÄĂÂ¨ÄÂCĂĹ˝J?QĂ˘ÂÂ°ÄÂ>T!}]eĂÂ ÄÂz7h^Ă˘ÂÂ	ĂËZ[ÄÂ$KĂÂ¨ĂĹÄÂjOZswĂĹĽ
P{b/ÄĹ¤ÄĹşĂ˘ÂÂ°ÄÂ)ÄÂÄšÂĂ˘ÂĹšu}ÄÂĂÂ´`/ÄÂ¸ÄÂ\ĂÄžÄĹWĂ˘ÂÄĂ˘ÂËĂĹźĂËĂĹ/ÄÂ¤@ÄĹ˝Dn7<KÄË*ĂËÄĹÄÂÄÂ&ĂÂ¸ÄÂĂ˘ÂÂĂËmÄĹžĂÂrwÄÂhÄÂÄÂĂÂÄÂsĂĹFÄÂ ÄĹťÄĹžÄÂ°ÄÂÄÂĂÄ˝ĂÄžĂËÄÂÄÂMebÄÂÄšËÄËÄÂWj3 XÄÂĂĹ 
(^ĂĹĂÂ ĂĹzÄËĂĹÄÂVÄË{ÄĹRĂÂ°ĂÂĂÂ¤uĂËsÄÂÄÂ5G]aibFHoĂÂ´DR8Ă˘ÂÂĂËj`ÄÂ§ÄÄĂĹ 2QĂÄiKĂ˘ÂÂMĂĹÄšÄÄĹ&=4ĂĹ Ă˘ÂÂ `fĂÂ´seÄšÄÄÂ´ÄÂÄÂ ĂÂvC3P;ÄÂ´ÄÂĂ˘ÂÂ`Ă˘ÂËĂË
Ă˘ÂÂÄÂĂ˘ÂĹĄĂÂ¸yÄÂĂ˘ÂÄÄÂ­ÄĹ¤wĂ˘ÂËÄËĂĹĄÄÂtwRÄÄ7ÄÂ­ĂÂ°ĂÂ ÄÂ?ÄÂĂÂtĂÂ¤ÄÂRĂĹdÄĹPÄÂÄÂ­ÄÂ"ĂËÄÂ´ÄÂÄÂÄÄ$/e2ÄĹşĂÂ´ÄÂĂÂ´Z5{ĂÂ¨ÄÂaÄšÂ 1ÄÂ¤!ĂĹžÄšÂjnÄÂĂ˘ÂÂ MĂĹĂ˘ÂË2Ă˘ÂĹĄÄÂlĂÂ°ÄÂÄĹÄÂ-ÄÂZÄÂÄĹ˝ÄÂÄÄžÄÂĂÄžÄšĹžÄĹžÄšÂ¸Ă˘ÂÂÄÄžĂĹšÄÂ5ÄšÂ¸lĂ˘ÂÂĂĹ¤ÄÂoĂĹÄĹ˝#{ÄÂ^8ÄĹ¤'.qYÄÂĂÂÄšÄ?VĂĹ|ĂÄ*ÄÂ{]uÄÂĂÂ´ÄÂÄĹ eĂÄž`TÄÄwĂ˘ÂÂ;9Ă˘ÂÂ°ĂĹ¤FĂĹ˝a2ĂÂ­ÄšÄÄÄ˝ÄĹ-,Ă˘ÂÂÄšÂ¸ÄÂ4<pqĂ˘ÂÂÄÂÄšË'ĂËÄÂ­Ă˘ÂÂ=5ÄšÂ Ă˘ÂÂ >+Ă˘ÂÂÄÂÄĹşÄĹşÄÂ¨ÄËYÄšÄĂ˘ÂÂÄÂÄÂÄÂBUÄÂÄÂ-R6ÄÂ¸ÄÂ-ÄÂ-ÄÂ-ĂÂÄÂ°NWĂ˘ÂÂQÄÂ-ÄÂ--->