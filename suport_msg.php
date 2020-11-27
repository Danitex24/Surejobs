<?php include("connection.php");

if(isset($_POST ['send'])){
		$id=time().rand();
		$name=$_POST['name'];
		$received_from=$_POST['received_from'];
		$subject=$_POST['subject'];
		$msg=$_POST['msg'];
		$sent_date=date('Y:m:d');
				

		//create an insert conn to send record to the database!!
		$insert=mysqli_query($connection,"INSERT INTO suport_inbox_msg (id, name, received_from, subject, msg, sent_date)VALUES('$id','$name','$received_from','$subject','$msg','$sent_date')")or die(mysqli_error($connection));

		
		if($insert){
			echo "<script>alert('massage sent thank you')
			location='home.php'; </script>";
		}else{
			echo  "<script>alert('massage not sent, please cheach your record!')</script>";
		}
	}
	?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<title>suport_msg</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header class="header">
	<a href="admin.php" title="Home page"><img src="sitelogo3.png" height="150" width="700" /></a>
	<h2 style="text-align: center; color: green;">Welcome to Surejobs No.1 online job portal</h2>
	</header>
	<div align="center">
		<h4 style="background-color: white; color: red; width: 320px; text-align: center; font-family: Tahoma; size: 10px;">Carefully state out the key things and main point of your massage</h4>
<form  class="form" method="post">
		<table>
				<tr>
					<td>
						Name:
					</td>
				
					<td>
						<input type="text" name="name" required="yes">
					</td>
				</tr>
				<tr>
					<td>
						From:
					</td>
				
					<td>
						<input type="text" name="received_from" required="yes">
					</td>
				</tr>
				<tr>
					<td>
						Subject:
					</td>
				
					<td>
						<input type="text" name="subject" required="yes">
					</td>
				</tr>
				<tr>
					<td>
						Content:
					</td>
				
					<td>
						<textarea name="msg" required="yes" placeholder="Enter massage here!" maxlength="225" style="width: 205px;"></textarea>
					</td>
				</tr>
				
				<tr>
					<td>
						            
					</td>
				<td>
					<input type="submit" onclick="alert('Are sure you want to send this massage ?')"; name="send" value="Send Now">
				</td>
				</tr>

		</table>
	</form>
</div>


	<footer class="footer">
		<ul>
			<li>
			<a href="#">Facebook page</a> |
				<a href="#">Twitter</a> |
				<a href="#">Youtube</a> |
				<a href="#">Contact Us</a>
			</li>
		</ul>
		copyright surejobs @ 2018
	</footer>

</body>
</html>