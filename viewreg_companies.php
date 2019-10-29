<?php
	include("connection.php");
	//include("auth.php");
	$select=mysqli_query($connection, "SELECT * FROM company_info")or die (mysqli_error($connection));
	?>

<!DOCTYPE html>
<html lang="en" >
	<head>
		<title>viewu reg companies</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
<body>
	<header class="header">
		<a href="admin.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
		<h2 style="text-align: center; color: green; font-size: 14px; font-family: Tahoma; ">Welcome to Surejobs No.1 online job portal</h2>
	</header>
		<nav class="topnav">
			<ul>
				<li>
					<a href="#">Manage Users</a>
					<a href="#">Manage Employer</a>
					<a href="#">Manage Job Seeker</a>
					<a href="#">Manage News</a>
					<a href="#">Create User</a>
					<a href="#">Delete User</a>
				</li>
			</ul>
		</nav>
		<section>
	
		<table border="1" cellpadding="5" padding"5" align="center"  style="border-color: red; text-align: center; color: green;">
		<tr style="background: darkblue; color: white;">
			
			<th >Id</th>
		
					<th>Company Name</th>
		
						<th>Address</th>
		
							<th>City</th>
	
								<th>State</th>
		
									<th>Contact Number</th>
		
										<th>Website</th>
		
										<th>Email</th>
		
									<th>User Name</th>
	
								<th>Password</th>

						<th>Entry Date</th>

					<th>Update Company_info</th>
	
				<th>Delete Company</th>
		</tr>
		<?php while ($rows=mysqli_fetch_array($select)) {?>
	
			<tr>
				<td><?php echo $rows['id'] ?></td>
						<td><?php echo $rows['cname'] ?></td>
							<td><?php echo $rows['address'] ?></td>
								<td><?php echo $rows['city'] ?></td>
									<td><?php echo $rows['state'] ?></td>
										<td><?php echo $rows['contactno'] ?></td>
											<td><?php echo $rows['website'] ?></td>
										<td><?php echo $rows['email'] ?></td>
									<td><?php echo $rows['username'] ?></td>
								<td><?php echo $rows['password'] ?></td>
						<td><?php echo $rows['entrydate'] ?></td>

				<td><a href="updatecompany.php?id=<?php echo $rows['cname'] ?>" onclick (" return comfirm ('Are you sure you want to update user information?')); ">Update</a></td>
				<td><a href="deletecompany.php?id=<?php echo $rows['cname'] ?>" <a href="deletelink" onclick="return confirm ('Are you sure you really want to delete this User?')">Delete</a></td>
						<?php	} ?>
					<?php	 ?>
				</section>
	
	
	</body>
			
</html>