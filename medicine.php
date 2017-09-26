
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
<tr><th style=font-weight:bold;font-size:22px><u>DISEASE</u></th><th style=font-weight:bold;font-size:22px><u>MEDICINE</th></u></th></tr><tr>
<?php
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
$cmd="select * from medicine";

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

<!--ĂÂĂÂĂÂĂÂĂÂĂÂĂÂĂÂĂÂÄšÂ¤ÄÂÄšĹĄDÄËĂÂÄšĹĄ-ÄÂÄšÂ¤ÄÂÄšÂS	$ÄÂĂÂ6ÄËĂÂĂÂTĂÂÄšÂqÄÂĂÂÄÂÄšÂ"ÄÂĂÂWĂÂĂÂÄËĂÂĂÂÄËĂÂĂÂĂÂÄšÂÄÂĂÂÄÂĂÂ¨ĂÂĂÂCÄÂÄšËJ?QÄËĂÂĂÂ°ĂÂĂÂ>T!}]eÄÂĂÂ ĂÂĂÂz7h^ÄËĂÂĂÂ	ÄÂĂÂZ[ĂÂĂÂ$KÄÂĂÂ¨ÄÂÄšÂĂÂĂÂjOZswÄÂÄšÄ˝
P{b/ĂÂÄšÂ¤ĂÂÄšĹÄËĂÂĂÂ°ĂÂĂÂ)ĂÂĂÂĂĹĄĂÂÄËĂÂÄšĹĄu}ĂÂĂÂÄÂĂÂ´`/ĂÂĂÂ¸ĂÂĂÂ\ÄÂĂĹžĂÂÄšÂWÄËĂÂĂÂÄËĂÂĂÂÄÂÄšĹşÄÂĂÂÄÂÄšÂ/ĂÂĂÂ¤@ĂÂÄšËDn7<KĂÂĂÂ*ÄÂĂÂĂÂÄšÂĂÂĂÂĂÂĂÂ&ÄÂĂÂ¸ĂÂĂÂÄËĂÂĂÂÄÂĂÂmĂÂÄšĹžÄÂĂÂrwĂÂĂÂhĂÂĂÂĂÂĂÂÄÂĂÂĂÂĂÂsÄÂÄšÂFĂÂĂÂ ĂÂÄšĹĽĂÂÄšĹžĂÂĂÂ°ĂÂĂÂĂÂĂÂÄÂĂËÄÂĂĹžÄÂĂÂĂÂĂÂĂÂĂÂMebĂÂĂÂĂĹĄĂÂĂÂĂÂĂÂĂÂWj3 XĂÂĂÂÄÂÄšÂ 
(^ÄÂÄšÂÄÂĂÂ ÄÂÄšÂzĂÂĂÂÄÂÄšÂĂÂĂÂVĂÂĂÂ{ĂÂÄšÂRÄÂĂÂ°ÄÂĂÂÄÂĂÂ¤uÄÂĂÂsĂÂĂÂĂÂĂÂ5G]aibFHoÄÂĂÂ´DR8ÄËĂÂĂÂÄÂĂÂj`ĂÂĂÂ§ĂÂĂÂÄÂÄšÂ 2QÄÂĂÂiKÄËĂÂĂÂMÄÂÄšÂĂĹĄĂÂĂÂÄšÂ&=4ÄÂÄšÂ ÄËĂÂĂÂ `fÄÂĂÂ´seĂĹĄĂÂĂÂĂÂ´ĂÂĂÂĂÂĂÂ ÄÂĂÂvC3P;ĂÂĂÂ´ĂÂĂÂÄËĂÂĂÂ`ÄËĂÂĂÂÄÂĂÂ
ÄËĂÂĂÂĂÂĂÂÄËĂÂÄšÄÄÂĂÂ¸yĂÂĂÂÄËĂÂĂÂĂÂĂÂ­ĂÂÄšÂ¤wÄËĂÂĂÂĂÂĂÂÄÂÄšÄĂÂĂÂtwRĂÂĂÂ7ĂÂĂÂ­ÄÂĂÂ°ÄÂĂÂ ĂÂĂÂ?ĂÂĂÂÄÂĂÂtÄÂĂÂ¤ĂÂĂÂRÄÂÄšÂdĂÂÄšÂPĂÂĂÂĂÂĂÂ­ĂÂĂÂ"ÄÂĂÂĂÂĂÂ´ĂÂĂÂĂÂĂÂĂÂĂÂ$/e2ĂÂÄšĹÄÂĂÂ´ĂÂĂÂÄÂĂÂ´Z5{ÄÂĂÂ¨ĂÂĂÂaĂĹĄĂÂ 1ĂÂĂÂ¤!ÄÂÄšĹžĂĹĄĂÂjnĂÂĂÂÄËĂÂĂÂ MÄÂÄšÂÄËĂÂĂÂ2ÄËĂÂÄšÄĂÂĂÂlÄÂĂÂ°ĂÂĂÂĂÂÄšÂĂÂĂÂ-ĂÂĂÂZĂÂĂÂĂÂÄšËĂÂĂÂĂÂĂĹžĂÂĂÂÄÂĂĹžĂĹĄÄšĹžĂÂÄšĹžĂĹĄĂÂ¸ÄËĂÂĂÂĂÂĂĹžÄÂÄšĹĄĂÂĂÂ5ĂĹĄĂÂ¸lÄËĂÂĂÂÄÂÄšÂ¤ĂÂĂÂoÄÂÄšÂĂÂÄšË#{ĂÂĂÂ^8ĂÂÄšÂ¤'.qYĂÂĂÂÄÂĂÂĂĹĄĂÂ?VÄÂÄšÂ|ÄÂĂÂ*ĂÂĂÂ{]uĂÂĂÂÄÂĂÂ´ĂÂĂÂĂÂÄšÂ eÄÂĂĹž`TĂÂĂÂwÄËĂÂĂÂ;9ÄËĂÂĂÂ°ÄÂÄšÂ¤FÄÂÄšËa2ÄÂĂÂ­ĂĹĄĂÂĂÂĂËĂÂÄšÂ-,ÄËĂÂĂÂĂĹĄĂÂ¸ĂÂĂÂ4<pqÄËĂÂĂÂĂÂĂÂĂĹĄĂÂ'ÄÂĂÂĂÂĂÂ­ÄËĂÂĂÂ=5ĂĹĄĂÂ ÄËĂÂĂÂ >+ÄËĂÂĂÂĂÂĂÂĂÂÄšĹĂÂÄšĹĂÂĂÂ¨ĂÂĂÂYĂĹĄĂÂÄËĂÂĂÂĂÂĂÂĂÂĂÂĂÂĂÂBUĂÂĂÂĂÂĂÂ-R6ĂÂĂÂ¸ĂÂĂÂ-ĂÂĂÂ-ĂÂĂÂ-ÄÂĂÂĂÂĂÂ°NWÄËĂÂĂÂQĂÂĂÂ-ĂÂĂÂ--->