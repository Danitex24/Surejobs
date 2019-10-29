<!DOCTYPE html>
<html lang="en" >
<head >
	<title>home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
</head >
<body>	<div style="with:2500; height:1500;">
	<header class="header" >
	<a href="home.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
	<h2 style="text-align: center; color: green;">Welcome to Surejobs No.1 online job portal</h2>
	</header>
		<nav class="topnav">
			<ul>
				<li>
					<a href="#">Search for job</a>
					<a href="jobseekers.php">Register</a>
					<a href="login.php">Login here</a>
					<a href="adminlogin.php">Admin</a>
					
				</li>
			</ul>
		</nav>
		<marquee style="text-anchor: start; color: darkblue; font-size:22px;" >Welcome to Surejobs No.1 online job portal</marquee>

		<!--the main content of the site goes under the section and has arrange in a table form with two rows, colums can be added so fars new content increased -->
		<section class="main_content" >
					
			<table style="padding: 5px; text-align: center;">
				<tr>
					<td>
						<img src="img/office_assis.jpg" height="150" width="300">
						<h3>Office Assistance</h3>
						<p>The following person's who has ND/HND, NCE, PGDs can <a href="apply.php">apply</a> for this post. Job interview will be announce in a <b>due time</b><a href="appliedjob.php">Apply Now</a> </p>

					</td>
					<td>
						<img src="img/npower.jpg">
						<h3>Npower Recruitment</h3>
						<p>The Federal Govt. of Nigeria in regard with the on-passed bill has comence the recruitment of non-graduate and undergraduate, You can follow the below link to>>>>> <a href="appliedjob.php">Apply</a></p>

					</td>
					<tr>
						<td>
							<img src="img/banner.png" height="150" width="300">
							<h3>Admin needed @ <a href="http://www.womanshealthweb.com">womanshealthweb.com</a></h3>
							<p>The following persons who has the knowledge about php, html, css, php, java, and mysql can <a href="appliedjob.php">apply</a> for this job as interview will be announce in a <b>due time</b> thank</p>
						</td>
						<td>
							<img src="img/graphic.jpg" height="150" width="280">
							<h3>Graphic Designer & Computer instructor</h3>
							<p>Graphic designer and computer instructor need @  <a href="http://www.panettech.net">Panet Tech</a>The following qualification Diploma in computer PDGs and photo edixtor can <a href="appliedjob.php">apply</a> for this job. <b>NOTE:</b> provide us with your detailed information to enable us tio contact you.</p>
						</td>
					</tr>
				
			</table>
	<!--end of table and section!!!!-->	
		</section>
		
		<!-- the 'right section' of the site with nav link should be float to the right side as the section is been float to the left -->

		<aside class="aside_right">
		<!--adds and othe content can be advertise or placed here!!!!  -->	
<ul>
	<li>
		<a href="http://www.facebook.com/abughdyerternenge">Facebook</a>  |
		<a href="mailto:free2naijakings@gmail.com">Email</a>  |
		<a href="http://www.twitter.com/danitex24">Twiter</a>  |
		<a href="suport_msg.php">Our Suport center</a>
	</li>
</ul>
			<div style="background-color: white; color: black; text-align: center;">
			<h2>ADS:</h2>
			<img src="img/promotions.png" width="350px" height="350px">
			<p ><h2 align="center">For Promotion</h2> </p>
			<p style="background-color: white; color: black; text-align: center;">
				For your music/video promotions, contact Us with the above contacts and we can promot your song to over 50 site across the country. you can foward us all your details via <a href="mailto:danielfree2rhymes24@gmail.com">email</a></p>
			</p>
			<a href="home.php"><h2>Back to Top</h2></a>
		</div>

		</aside>

	
	<footer class="footer">
			<table align="left">

					<tr>
					<td>
			| <a href="http://www.Spiritlifechristianassembly.com">Spiritlifechristianassembly.com</a> |
					</td>
				</tr>
				<tr>
					<td>
		| <a href="http://www.naijakings.com.ng">naijakings.com.ng</a> |
					</td>
				</tr>
				<tr>
					<td>
			| <a href="http://www.waptech.rf.gd/wp">waptech.rf.gd</a> |
					</td>
				</tr>
			
			</table>
			<?php
echo date("Y-M-d");
?>


		<ul>
			<li>
			<a href="#">Facebook page</a> |
				<a href="#">Twitter</a> |
				<a href="#">Youtube</a> |
				<a href="#">Contact Us</a> |
				<a href="mailto:free2naijakings@gmail.com">Email</a>
			</li>
		</ul>
		copyright surejobs &copy 2018
	</footer>

</body>
</html>