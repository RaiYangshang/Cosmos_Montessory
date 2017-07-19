<!doctype html>
<html>
     <head>
         <title>Online Admission</title>
	     <center><img src="../img/Start1.jpg" height="250"><center>
         <link rel="shortcut icon" href="Start1.jpg" />
     </head>
 <body bgcolor="F3G266">
        <ul id="menu">
			<h1>
			<center>
			<a href="viewEvents.php">Events</a>|
			<a href="checkStatus.php">Check Status</a>|
			<a href="contactforAppointment.php">Contact for Appointment</a>|

			<a href="../action/logout.php">Log Out</a>|
			</center>
			</h1>
	    </ul>
		<div>
			<form method="post" action="../action/admission.php">
				Name of Children: <input type="text" name="name"> <br>
				Age: <input type="number" name="age"> <br>
				Gender: <br>
				<input type="radio" name="gender" value="male" />Male<input type="radio"  name="gender" value="female" />Female <br>
				Address:<input type="text" name="address"> <br>
				<input type="submit" name="submit">
			</form>
		</div>
		<div id="footer">
			<div>
				<p><center> Cosmos Montessori School 2017 | PO Box 554422 Willton Toranto Road | Willton, MD 557364 <center></p>
			</div>
		</div>
 </body>
 </html>
 
 <?php
 session_start();
 if(!isset($_SESSION['login'])){
	 header('location:index.php');
 }
 ?>