<?php
	include("connection.php");
	$id=$_GET["id"];
		$delete=mysqli_query($connection, "DELETE FROM company_info WHERE cname='$id'")or die(mysqli_error($connection));
			if($delete==1){
				echo"<script>alert('Company successfuly deleted thank you')
				location='viewreg_companies.php';
				</script>";
			}else{
				echo"<script>alert('company not deleted You are not athurise to perform this function pls contact the admin')
				location='viewreg_companies.php';
				</script>";	}
			?>