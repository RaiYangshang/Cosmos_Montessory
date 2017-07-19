<?php
 session_start();
 if(!isset($_SESSION['login'])){
	 header('location:index.php');
 }
 ?>
 <!doctype html>
<html>
     <head>
         <title>Check Status</title>
	     <center><img src="../img/Start1.jpg" height="250"><center>
         <link rel="shortcut icon" href="../Start1.jpg" />
     </head>
 <body bgcolor="F3G266">
        <ul id="menu">
			<h1>
			<center>
			<a href="viewEvents.php">Events</a>|
			<a href="contactforAppointment.php">Contact for Appointment</a>|
			<a href="onlineAdmission.php">Online Admission</a>|
			<a href="../action/logout.php">Log Out</a>|
			</center>
			</h1>
	    </ul>
	    <div>
		<?php 
		  include("../action/database.php");
		  $user = $_SESSION['user'];
		  $sqluser = "SELECT * FROM registration WHERE `username`='$user'";
		  $user = mysqli_query($con, $sqluser);
		  $row = mysqli_fetch_array($user);
		 ?>
		<h3>Name: <?php echo $row['name'];?></h3>
		<h3>Username: <?php echo $row['username'];?></h3>
		<h4>Email-ID: <?php echo $row['email']; ?></h4>
		<h4>Address: <?php echo $row['address']; ?></h4>
		<h4>Gender: <?php echo $row['gender'];?></h4>
		<h4>Phone: <?php echo $row['phoneno'];?></h4>
  		</div>
		<div id="footer">
			<div>
				<p><center> Cosmos Montessori School 2017 | PO Box 554422 Willton Toranto Road | Willton, MD 557364 <center></p>
			</div>
		</div>
 </body>
 </html>
 
 