
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>medicare Website Template | contact :: W3layouts</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
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
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="services.php">services</a></li>
						<li><a href="blog.php">blog</a></li>
						<li class="active"><a href="contact.php">contact</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h2>Find Us Here</h2><br />
			    	 		<div class="map">
					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color:#666;text-align:left;font-size:12px">View Larger Map</a></small>
					   		</div>
      				</div>
      			<div class="company_address">
				     	<h2>HELPLINES :</h2>
						    	<p><strong>91-0161-2229011 , 21</strong></p>
						    	<p>91-0161-6617111</p>
						    	<p>91-0161-468 6600</p>
						    	<p>91-161-5069190</p>
<p>INDIA</p>
<p><font size="4">Follow us on: </font><span><a href="https://twitter.com/?lang=en"><img src="images/1100.jpg" height="25" width="25"></a></span>, <span><a href="https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1"><img src="images/1000.png" height="25" width="25"></a></span>,<span><a href="https://www.facebook.com/"><img src="images/900.jpg" height="25" width="25"></a></span></p>
                </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
				    <form name="f1" action="contact.php" method=post>
					    	<div>
						    	<span><label>Username</label></span>
						    	<span><input type="text" name="t1"></span>
						    </div>
						    <div>
						    	<span><label>Email</label></span>
						    	<span><input type="text" name="t2"></span>
						    </div>
                             <div>
						    	<span><label>Message</label></span>
						    	<span><input type="text" name="t3"></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="send" name="b1"></span>
						  </div><br><br><br><br>
                           <div>
						    	
				      </div>
                            
                             <div>
						    	
					    </div>
				    </form>
                       <div><span>
                       <?php
if(isset($_POST['b1']))
{
$t=0;
if(!empty($_POST['t1']))
{
if(ctype_alpha($_POST['t1']))
{
$u=$_POST['t1'];
}
else
{
$t=1;
echo"only alphabet are allowed";
}
}
else
{
$t=1;
echo"Username is required<br>";
}
if(!empty($_POST['t2']))
{
$e=$_POST['t2'];
}
else
{
$t=1;
echo"e-mail is required<br>";
}
if(!empty($_POST['t3']))
{
$m=$_POST['t3'];
}
else
{
$t=1;
echo"message is required<br>";
}
if($t==0)
{
$con=new mysqli("localhost","root","","emedical");
if($con==true)
{
$cmd="insert into contact values('$u','$e','$m')";
if($con->query($cmd)==true)
{
echo"message send";
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
?></span></div>
				    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
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
					</ul>
		   	</div>
		   	<div class="footer-right">
		   		<p>Medicare | Design By <a href="http://w3layouts.com/">MOHIT [1265]</a></p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

