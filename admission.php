<?php 
	session_start();
	include("database.php");
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$query ="INSERT INTO `admission`(`id`,`name`,`age`,`gender`,`address`) VALUES(NULL,'$name','$age','$gender','$address')";
		$result = mysqli_query($con,$query);
		echo "<SCRIPT type='text/javascript'>
		alert('Successfully Admitted');
		window.location.replace('../user/onlineadmission.php');
    	</SCRIPT>";			
	}	

 ?>