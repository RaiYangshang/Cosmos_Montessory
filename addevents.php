<?php 
	session_start();
	include("database.php");
	if(isset($_POST['add'])){
		$name = $_POST['eventname'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$query ="INSERT INTO `events`(`id`,`name`,`date`,`time`) VALUES(NULL,'$name','$date','$time')";
		$result = mysqli_query($con,$query);
		echo "<SCRIPT type='text/javascript'>
		alert('Event Added');
        window.location.replace('../admin/addevents.php');
    	</SCRIPT>";			
	}	

 ?>