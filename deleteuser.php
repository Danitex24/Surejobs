<?php
	include("connection.php");
	$id=$_GET["id"];
		$delete=mysqli_query($connection, "DELETE FROM jobseekers WHERE mname='$id'")or die(mysqli_error($connection));
			if($delete==1){
				echo"<script>alert('User successfuly deleted thank you')
				location='viewjobseekers.php';
				</script>";
			}else{
				echo"<script>alert('User not deleted You are not athurise to perform this function pls contact the admin')
				location='viewstudent.php';
				</script>";	}
			?>