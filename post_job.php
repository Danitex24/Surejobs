<?php
	include("connection.php");
	include("auth.php");

	if(isset($_POST ['send'])){
		$id=time().rand();
	$posted_date=date('Y:M:D');
	$jbtitle=$_POST['jbtitle'];
	$jb_poster_name=$_POST['jb_poster_name'];
	$jb_content=$_POST['jb_content'];
	
		$insert=mysqli_query($connection,"INSERT INTO available_jobs (id, jbtitle, posted_date, jb_content, jb_poster_name, )VALUES('$id','$jbtitle','$posted_date','$jb_content','$jb_poster_name')")or die(mysqli_error($connection));

		
		if($insert and $insert){
			echo "<script>alert('Job posted thank you')
			location='Post_job.php'; </script>";
		}else{
			echo  "<script>alert('job not posted please cheach your record!')</script>";
		}
	}
	?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<title>Post_job</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header class="header">
	<a href="admin.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
	<h2 style="text-align: center; color: green;">Welcome to Surejobs No.1 online job portal</h2>
	</header>
		<div align="center">
		<h1>Post Job Below</h1>
		<h4 style="background-color: lightgrey; color: red; ">Always provide Us current Jobs only!!!</h4>
<form  class="form" method="post" >
		<table>
				<tr>
					<td>
						Job Title:
					</td>
				
					<td>
						<input type="text" name="jbtitle">
					</td>
				</tr>
				<tr>
					<td>
						Job Posted By:
					</td>
				
					<td>
						<input type="text" name="jb_poster_name">
					</td>
				</tr>
				<tr>
					<td>
						Job Content:
					</td>
				
					<td>
						<textarea name="jb_content" placeholder="enter the job content here" maxlength="255" rows="10" cols="24"></textarea>
					</td>
				</tr>
				<tr>
					<td>
						            
					</td>
				<td>
					<input type="submit" onclick="alert('Are you sure you want to post this job ?')"; name="send" value="submit">
				</td>
				</tr>

		</table>
	</form>
</div>

	<footer class="footer">
		<ul>
			<li>
			<a href="#">Facebook page</a>
				<a href="#">Twitter</a>
				<a href="#">Youtube</a>
				<a href="#">Contact Us</a>
			</li>
		</ul>
		copyright surejobs @ 2018
	</footer>

</body>
</html>