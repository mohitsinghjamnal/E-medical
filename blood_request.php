
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
              <font  size="5"><form name="f1"action="blood_request.php"method="post"><pre>
Name                   :<input type="text"name="t1"><br /></pre><br>
<pre>gender                  :<input type="radio" name="r1" value="male" />male<input type="radio" name="r1" value="female" />female</pre><br /><pre>
Contact_number  :<input type="text"name="t2"><br />
Address                :<input type="text"name="t3"><br />
Amail_id              :<input type="text"name="t4"><br />
Blood_group        :<input type="text"name="t5"><br />
Age                      :<input type="text"name="t6"><br><br></pre>
  <table>
  <tr>
    <td colspan="1"><div align="center">
      <input name="b1" type="submit" class="frist" value="Send request" style="width:100px">
    </div></td>
    </tr>
</table>
</form></font>
<?php
if(isset($_POST['b1']))
{
	$n=$_POST['t1'];
	$g=$_POST['r1'];
	$cn=$_POST['t2'];
	$ad=$_POST['t3'];
	$ei=$_POST['t4'];
	$br=$_POST['t5'];
	$u=$_POST['t6'];
	$con=new mysqli("localhost","root","","emedical");
	if($con==true)
	{
$cmd="insert into blood_request values('$n','$g','$cn','$ad','$br','$u')";
	if($con->query($cmd)==true)
	{
		echo "One record inserted";
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

<!--ĂĂĂĂĂŤÂŹDâŹ-ÂŤÂŞS	$Ë6âTĂşqÂÂŞ"ÂWĂ''ĂśÂĄÂ¨ĂCÂŽJ?Qâ°Ă>T!}]eÂ Ăz7h^â	ÂˇZ[Ă$KÂ¨ÂŚĂjOZswÂť
P{b/ĂŤĂźâ°Ă)ĂĹâŹu}ĂÂ´`/Ă¸Ă\ÂľĂşWâĄâ˘ÂżÂ˘ÂŁ/Ă¤@ĂŽDn7<KĂ˝*ÂˇĂłĂĂ&Â¸Ă'ÂˇmĂžÂrwĂhĂĂËĂsÂŚFĂ ĂŻĂžĂ°ĂĂÂĽÂľÂ˝ĂĂMebĂĹ˝Ă˝ĂWj3 XĂÂŠ
(^ÂŁÂ ÂŞzĂˇÂşĂVĂ˛{ĂŞRÂ°ÂÂ¤uÂ˛sĂĂ5G]aibFHoÂ´DR8"Âˇj`Ă§ĂąÂŠ2QÂąiK"MÂşĹĄĂł&=4ÂŠâ `fÂ´seĹĄĂ´ĂĂ ËvC3P;Ă´Ă"`â˘Â˘
"ĂâšÂ¸yĂâĄĂ­ĂŤwâ˘Ă˝ÂšĂtwRĂą7Ă­Â°Â Ă?ĂËtÂ¤ĂRÂŞdĂŚPĂĂ­Ă"Â˘Ă´ĂĂĂą$/e2ĂźÂ´ĂÂ´Z5{Â¨ĂaĹ 1Ă¤!ÂžĹjnĂâ MÂŞâ˘2âšĂlÂ°ĂĂŁĂ-ĂZĂĂŽĂĂľĂÂľĹžĂžĹ¸"ĂľÂŹĂ5Ĺ¸l'ÂŤĂoÂłĂŽ#{Ă^8ĂŤ'.qYĂËĹĄ?VÂś|ÂĄ*Ă{]uĆÂ´ĂĂŠeÂľ`TĂąw";9â°ÂŤFÂŽa2Â­ĹĄĂĽĂł-,'Ĺ¸Ă4<pqâĂĹ˝'Â˘Ă­'=5Ĺ â >+"ĂĂźĂźĂ¨Ă˘YĹĄ'ĂĂĂBUĂĂ-R6Ă¸Ă-Ă-Ă-ÂĂ°NW'QĂ-Ă--->