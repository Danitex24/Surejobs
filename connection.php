<?php

session_start();
ob_start();
$con="localhost"; 
$dbuser="root";
$dbname="surejobs";
$dbpassword="";

$connection=mysqli_connect($con,$dbuser,$dbpassword,$dbname)or die(mysqli_error());
if ($connection){
	//echo "connection esterblished successfuly!!!";
}
//use this application to create site ZERA TEXT EDITOR for site creation
?>


