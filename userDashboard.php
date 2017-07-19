 <?php
 session_start();
 if(!isset($_SESSION['login'])){
	 header('location:index.php');
 }
 ?>
<!doctype html>
<html>
     <head>
         <title>User Dashboard</title>
	     <center><img src="../img/Start1.jpg" height="250"><center>
         <link rel="shortcut icon" href="../Start1.jpg" />
     </head>
 <body bgcolor="F3G266">
        <ul id="menu">
			<h1>
			<center>
			<a href="viewEvents.php">Events</a>|
			<a href="checkStatus.php">Check Status</a>|
			<a href="contactforAppointment.php">Contact for Appointment</a>|
			<a href="onlineAdmission.php">Online Admission</a>|
			<a href="../action/logout.php">Log Out</a>|
			</center>
			</h1>
	    </ul>
		
		<div id="footer">
			<div>
				<p><center> Cosmos Montessori School 2017 | PO Box 554422 Willton Toranto Road | Willton, MD 557364 <center></p>
			</div>
		</div>
 </body>
 </html>