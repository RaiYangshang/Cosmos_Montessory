 <?php
 session_start();
 if(!isset($_SESSION['login'])){
	 header('location:index.php');
 }
 ?>
<!doctype html>
<html>
     <head>
         <title>View Events</title>
	     <center><img src="../img/Start1.jpg" height="250"><center>
         <link rel="shortcut icon" href="../Start1.jpg" />
     </head>
 <body bgcolor="F3G266">
        <ul id="menu">
			<h1>
			<center>
			<a href="checkStatus.php">Check Status</a>|
			<a href="contactforAppointment.php">Contact for Appointment</a>|
			<a href="onlineAdmission.php">Online Admission</a>|
			<a href="../action/logout.php">Log Out</a>|
			</center>
			</h1>
	    </ul>
		<div>
			<table border="1px">
				<tr>
					<th>SN</th> <th>Event Name</th> <th>Event Date</th> <th>Time</th>
				</tr>
				<?php 
					include("../action/database.php");
            		$query = "SELECT * FROM events";
                  $sql = mysqli_query($con, $query);
                  $i=1;
                  while($row = mysqli_fetch_array($sql)){
                    $id = $row['id'];
				 ?>
				<tr>
					<td><?php echo $id; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['date']; ?></td>
					<td><?php echo $row['time']; ?></td>
				</tr>
				<?php 
					}
				 ?>
			</table>
		</div>
		<div id="footer">
			<div>
				<p><center> Cosmos Montessori School 2017 | PO Box 554422 Willton Toranto Road | Willton, MD 557364 <center></p>
			</div>
		</div>
 </body>
 </html>
 