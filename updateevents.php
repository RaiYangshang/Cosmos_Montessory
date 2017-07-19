<?php 
	session_start();
	include("database.php");
	if(isset($_POST['update'])){
		$eid = $_SESSION['eid'];
		$name = $_POST['name'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$query ="UPDATE `events` SET `name` = $name, `date` = '$date', `time` = '$time' WHERE id = '$eid'";
		$result = mysqli_query($con,$query);
		echo "<SCRIPT type='text/javascript'>
        window.location.replace('../admin/addevent.php');
		alert('Update Successful');
    	</SCRIPT>";			
	}	
 ?>