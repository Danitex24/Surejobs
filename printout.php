<?phpu
	include("connection.php");
	include("auth.php");
	//session_start();
	
		$school=$_POST['school'];
			$qualification=$_POST['qualification'];
				$passyear=$_POST['passyear'];
					$enrollno=time().rand();
						$entrydate=$_POST['entrydate'];
						$hubbie=$_POST['hubbie'];
					$workingexperience=$_POST['workingexperience'];
				$sname=$_POST['sname'];
			$fname=$_POST['fname'];
		$mname=$_POST['mname'];
	$gender=$_POST['gender'];
	
		$insert=mysqli_query($connection,"INSERT INTO edu_info_of_jobseeker(school, qualification, passyear, enrollno, entrydate, hubbie, workingexperience, sname, fname, mname, gender)VALUES('$school','$qualification','$passyear','$enrollno','$entrydate','$hubbie','$workingexperience','$sname','$fname','$mname', '$gender')")or die(mysqli_error($connection));
		$fetch=mysqli_fetch_array($insert);

		if ($insert)>0{
			echo "<script>alert('infor updated')</script>";
		}else{
			echo "<script>alert('infor not updated')</scrip>";
		}
	}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="forms.css">
	</head>
	<body>
	

	<table class="view" cellspacing="10" align="center" cellpadding="8">
		<tr>
			
			<td>
				Enroll Number:
			</td>
			<td>
				<span style="text-align: center;">
					<?php  if(isset($enrollno)) echo $fetch['enrollno']; ?>
				</span>
			</td>
		</tr>
		<tr>
			<td>
				Surname:
			</td>
			<td>
				<span style="text-align: center;">
					<?php echo $fetch['sname']; ?>
				</span>
			</td>
		</tr>
		<tr>
			<td>
				Firstname:
			</td>
			<td>
				<span style="text-align: center;">
					<?php echo $fetch['fname']; ?>
				</span>
			</td>
		</tr>
		<tr>
			<td>
				Middlename:
			</td>
			<td>
				<span style="text-align: center;">
					<?php echo $fetch['mname']; ?>
				</span>
			</td>
		</tr>
		<tr>
			<td>
				Gender:
			</td>
			<td>
				<span style="text-align: center;">
					<?php echo $fetch['gender']; ?>
				</span>
			</td>
		</tr>
		
		<tr>
			<td>
				School:
			</td>
			<td>
				<span style="text-align: center;">
					<?php echo $fetch['school']; ?>
				</span>
			</td>
		</tr>
		<tr>
			<td>
				Qualification:
			</td>
			<td>
				<span style="text-align: center;">
					<?php echo $fetch['qualification']; ?>
				</span>
			</td>
		</tr>
		<tr>
			<td>
				Pass out Year:
			</td>
			<td>
				<span style="text-align: center;">
					<?php echo $fetch['passyear']; ?>
				</span>
			</td>
		</tr>
		
		<tr>
			<td>
				Entry Date:
			</td>
			<td>
				<span style="text-align: center;">
					<?php echo $fetch['entrydate']; ?>
				</span>
			</td>
		</tr>
		<tr>
			<td>
				Hubbie:
			</td>
			<td>
				<span style="text-align: center;">
					<?php echo $fetch['hubbie']; ?>
				</span>
			</td>
		</tr>
		<tr>
			<td>
				Working Experience:
			</td>
			<td>
				<span style="text-align: center;">
					<?php echo $fetch['workingexperience']; ?>
				</span>
			</td>
		</tr>
		
		

	</table>

	</body>
	</html>