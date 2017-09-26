
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
					<a href="index.html"><img src="images/logo.png" title="logo" /></a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">services</a></li>
						<li><a href="blog.html">blog</a></li>
						<li class="active"><a href="contact.html">contact</a></li>
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
						    	<p>1024</p>
<p>INDIA</p>
<p><font size="4">Follow us on: </font><span><a href="https://twitter.com/?lang=en"><img src="images/1100.jpg" height="25" width="25"></a></span>, <span><a href="https://accounts.google.com/ServiceLogin?service=mail&passive=true&rm=false&continue=https://mail.google.com/mail/&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1"><img src="images/1000.png" height="25" width="25"></a></span>,<span><a href="https://www.facebook.com/"><img src="images/900.jpg" height="25" width="25"></a></span></p>
                </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
				    <form name="f1" action="login.php" method=post>
					    	<div>
						    	<span><label>User name</label></span>
						    	<span><input type="text" name="t1"></span>
						    </div>
						    <div>
						    	<span><label>Password</label></span>
						    	<span><input type="text" name="t2"></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit" name="b1"></span>
						  </div><br><br><br><br>
                           <div>
						    	<span><label><a href="register.php">New user click here</a></label></span>
				      </div>
                            <div>
						    	<span><label><input type="submit" name="b2"  value="delete account"></label></span>
					    </div>
                             <div>
						    	<span>
						    	<label>
						    	  <input type="submit" name="b3"  value="update account">
					    	    </label>
						    	</span>
					    </div>
				    </form>
                       <div><span>
                        <?php
session_start();
if(isset($_POST['b3']))
{
header('location:passwordrecovery.php');
}
if(isset($_POST['b1']))
{
$u=$_POST['t1'];
$p=$_POST['t2'];
$con=new mysqli("localhost","root","","bank");
if($con==true)
{
$cmd="select *from empaccount where username='$u' and password='$p'";
if($r=$con->query($cmd))
{
if($r->num_rows>0)
{
$_SESSION['u']=$u;
header('location:welcome.php');
}
else
{
echo"invalid user name or password";
}
}
else
{
echo"queryproblem";
}
}
else
{
echo"connection problem";
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
						<li><a href="about.html">About</a></li>
						<li><a href="services.html">services</a></li>
						<li><a href="blog.html">blog</a></li>
						<li><a href="contact.php">contact</a></li>
					</ul>
		   	</div>
		   	<div class="footer-right">
		   		<p>Medicare | Design By <a href="http://w3layouts.com/">W3Layouts</a></p>
		   	</div>
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

