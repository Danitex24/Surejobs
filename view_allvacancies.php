<?php
	include("connection.php");
	$select=mysqli_query($connection, "SELECT * FROM available_jobs")or die (mysqli_error($connection));
	?>

<!DOCTYPE html>
<html lang="en" >
	<head>
		<title>viewu all vacancies</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
<body>
	<header class="header">
		<a href="admin.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
		<h2 style="text-align: center; color: green; font-family: Tahoma; font-size: 14px;">Welcome to Surejobs No.1 online job portal</h2>
	</header>
		<nav class="topnav">
			<ul>
				<li>
					<a href="#">Search for job</a>
					<a href="jobseekers.php">Register</a>
					<a href="logout.php">Logout</a>
					<a href="adminlogin.php">Admin</a>
					
				</li>
			</ul>
		</nav>
		<section>
			
	<h2 class="title" align="center">View all the available vacancies</h2>
	
		<table border="1" cellpadding="15" align="center" >
		<tr style="background: darkblue; color: white;">
			
			<th >Id</th>
		
					<th>Job Title</th>
		
						<th>Posted Date</th>
		
					<th>Job Content</th>
	
			<th>Job posted By</th>

		</tr>
		<?php while ($rows=mysqli_fetch_array($select)) {?>
	
			<tr>
				<td><?php echo $rows['id'] ?></td>
						<td><?php echo $rows['jbtitle'] ?></td>
							<td><?php echo $rows['posted_date'] ?></td>
								<td><?php echo $rows['jb_content'] ?></td>
									<td><?php echo $rows['jb_poster_name'] ?></td>
							
						<?php	} ?>
					<?php	 ?>
				</section>
		 
	</body>
			
</html>