<?php 
	session_start();
	include("database.php");
	$username = $_GET['user'];
	$query ="DELETE FROM `registration` WHERE `username` = '$username'";
	$result = mysqli_query($con,$query);
	echo "<SCRIPT type='text/javascript'>
        alert('User Deleted');
        window.location.replace('../admin/removeuser.php');
    	</SCRIPT>";	
 ?>