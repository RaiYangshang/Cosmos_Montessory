<!doctype html>
<html>
  <head>
 <title>Montessori Management System</title>
	     <center><img src="Start1.jpg" height="250"><center>
       <link rel="shortcut icon" href="Start1.jpg" />
</head>
<body bgcolor="E56CCF"> 
        <div>	
		<ul id="menu">
			<h1>
			<center>
		<a href="1st.php">Home</a>|
			<a href="about.php">About Us</a>|
			<a href="program.php">Our Programs</a>|
			<a href="photo.php">Photo Gallary</a>|
			<a href="contact.php">Contact Us</a>|
			</h1>
	    </ul>
	   </div>
	   <div class="side_page">
	      <div id="side_admin">
		    <ul>
		      <li><a href="event.php">Event Management</a></li>
			  <li><a href="request.php">Manage Request</a></li>
			  <li><a href="subscription.php">View Subscription</a></li>
			  <li><a href="viewuser.php">View User</a></li>
			  <li><a href="appointment.php">Preist Appointment</a></li>
		    </ul>
		  </div>
	   </div>
	   <div class="main_page">
	      <form method="post" action ="event.php">
		     <table width="350px" border="1px">
			    <tr>
				   <td>Event ID:</td>
				   <td><input type="text" name="id" placeholder="Event ID" value="<?php echo $id;?>" /></td>
				</tr>
				<tr>
				  <td>Event Name:</td>
				  <td><input type="text" name="eventname" placeholder="Event Name"  value="<?php echo $eventname;?>"/></td>
				</tr>
				<tr>
				  <td>Event Date</td>
				  <td><input type="date" name="eventdate" placeholder="Event Date"  value="<?php echo $eventdate;?>"/></td>
				</tr>
				<tr>
				  <td>Event Time</td>
				  <td><input type="time" name="eventime" placeholder="Event Time"  value="<?php echo $eventime;?>"/></td>
				</tr>
				<tr>
				  <td colspan="2" align="center">
				      <input type="submit" value="Add Event" name="upload" />
				      <input type="submit" value="Find Event" name="search" />
					  <input type="submit" value="Update Event" name="update" />
				      <input type="submit" value="Delete Event" name="delete" />
				  </td>
				</tr>
			 </table>
		  </form>
		</div>  
	 </div>
<?php
  include("../action/database.php");
  $id="";
  $EventName="";
  $Date="";
  $Time="";
  function getPosts(){
	  $posts=array();
	  $posts[0]=$_POST['id'];
	  $posts[1]=$_POST['EventName'];
	  $posts[2]=$_POST['Date'];
	  $posts[3]=$_POST['Time'];
	  return $posts;
  } 
  //search
  if(isset($_POST['search'])){
	  $data = getPosts();
	  $search_sql = "SELECT * FROM eventmanagement WHERE id = '$data[0]'";
	  $search_result = mysqli_query($con, $search_sql);
	  if($search_result){
		  if(mysqli_num_rows($search_result)){
			  while($row=mysqli_fetch_array($search_result)){
				   $id=$row['id'];
				   $eventname=$row['EventName'];
				   $eventdate=$row['Date'];
				   $eventime=$row['Time'];
			  }
		  }else{
			  echo "<script>alert('No data')</script>";
		  }
	  }else{
		  echo "<script>alert('Error')</script>";
	  }
   }
   //delete
   if(isset($_POST['delete'])){
	  $data = getPosts();
	  $delete_sql = "DELETE FROM eventmanagement WHERE id = '$data[0]'";
	  $delete_result = mysqli_query($con, $delete_sql);
	  if($delete_result){
		    echo "<script>alert('Data delted successfully')</script>";
	   }else{
		  echo "<script>alert('Retry again')</script>";
	  }
   }
   //update
   if(isset($_POST['update'])){
	  $data = getPosts();
	  $update_sql = "UPDATE eventmanagemenyt SET id='$data[0]', EventName='$data[1]',Date='$data[2]',Time='$data[3]' WHERE id = '$data[0]'";
	  $update_result = mysqli_query($con, $update_sql);
	  if($update_result){
		    echo "<script>alert('Data updated successfully')</script>";
	   }else{
		  echo "<script>alert('Retry again')</script>";
	  }
   }
   if(isset($_POST['upload'])){
	  $eventname=$_POST['EventName'];
	  $eventdate=$_POST['Date'];
	  $eventime=$_POST['Time'];
	  $sql="INSERT INTO eventmanagement(EventName,Date,Time)VALUES('$EventName','$Date','$Time')";
	  $result=mysqli_query($con,$sql);
	  if($result){
		  echo "<script>alert('Event uploaded successfully');</script>";
	  }else{
		  echo "<script>alert('Retry Again');</script>";
	  }
  }
  
?>
  </body>
</html>
