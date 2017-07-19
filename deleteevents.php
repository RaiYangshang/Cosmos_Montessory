<?php 
	session_start();
	include("database.php");
	$eid = $_GET['eid'];
	$query ="DELETE FROM `events` WHERE `id` = '$eid'";
	$result = mysqli_query($con,$query);
	echo "<SCRIPT type='text/javascript'>
        alert('Event Deleted');
        window.location.replace('../admin/deleteEvent.php');
        
    	</SCRIPT>";	

 ?>