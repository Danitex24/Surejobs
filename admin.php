
<!DOCTYPE html>
<html lang="en" >
<head >
	<title>admin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">

<!-- stylesheet for the dropdown menue note all the code here should remain intact!!!!


z6r793jx my bet9ja

-->

	<style type="text/css">
		#header{
			background:#778899;
			width:100%;
			height:70px;
			border-radius: 30px 0px opx 30px;
			text-shadow:#000000;
			}
  		ul {list-style: none;padding: 0px;margin: 0px;}
  		ul li {display: block;position: relative;float: left;border:1px solid #}
  		li ul {display: none;}
  		ul li a {display: block;background: #;padding: 25px 10px 10px 15px;text-decoration: none;
           white-space: nowrap;color: #fff; font-size:18px;}
 		 ul li a:hover {background: #000;}
 			 li:hover ul {display: block; position: absolute;}
  				li:hover li {float: none;}
 				 li:hover a {background: #000;}
  					li:hover li a:hover {background: #778899;}
 						 #drop-nav li ul li {border-top: 0px;}
	</style>
</head >

<body>	
	<header class="header" >
	<a href="admin.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
	<h2 style="text-align: center; color: green;">Welcome to Surejobs No.1 online job portal</h2>
	</header>

<!-- dropdown menue note between ul, and li start a new drop!--> 

<div id="header">
<ul id="drop-nav">
  <li><a href="logout_admin.php">Logout</a></li>
  <li><a href="admin.php">Home</a>
  <li><a href="index.php">Switch to User interface</a>
    <ul>
      <li><a href="create_user.php">Create User</a></li>
      <li><a href="deleteuser.php">Delete User</a></li>
      <li><a href="viewjobseekers.php">View Job Seekers</a></li>
    </ul>
  </li>
  <li><a href="#">Content Management</a>
    <ul>
      <li><a href="viewreg_companies.php">Manage Company Informations</a></li>
      <li><a href="deletecompany.php">Dlete Company</a></li>
      <li><a href="updatecompany.php">Update Company</a></li>
      <li><a href="viewreg_companies.php">View Registered Companies</a></li>
    </ul>
  </li>
  <li><a href="suport_msg.php">Contact US</a>
    <ul>
      <li><a href="mailto:free2naijakings@gmail.com">Email Us</a></li>
      <li><a href="http://www.facebook.com">Facebook.com</a></li>
    </ul>
  </li>
</ul>
</div>

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
		</section>


		<aside class="aside_right" style="font-family: Berlin Sans FB Demi; padding: 0px; text-align: center; color: black; text-align: justify;">
			<div style="background-color: #778899; color: white;">
		<ol>
			<li style=" text-decoration: none; display: block; padding: 2px; padding: 5px;">
				<a href="suport_msg.php">Contact Us</a> |
				<a href="viewreg_companies.php">View Registered Companies</a> |
				<a href="viewjobseekers.php">View Jobseekers</a> |
				<a href="view_allvacancies.php">View All Jobs</a>
				<a href="post_job.php">Post a Job</a>
			</li>
		</ol>
			</div>
			<p><h2 align="center">ADS:</h2> </p>
			<img src="img/promotions.png" width="350px" height="350px">
			<p>
				For your music/video promotions, contact Us with the above contacts and we can promot your song to over 50 site across the country</p>
			</p>
	</aside>

	<footer class="footer">
		<ol style="text-decoration: none;">
			<li>
			<a href="#">Facebook page</a>
				<a href="#">Twitter</a>
				<a href="#">Youtube</a>
				<a href="#">Contact Us</a>
			</li>
		</ol>
		copyright surejobs @ 2018
	</footer>

</body>
</html>