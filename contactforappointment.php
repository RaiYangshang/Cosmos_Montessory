<!doctype html>
<html>
  <head>
     <title>Church Management System</title><!--title of the webpage-->
	 <!--css for index.php pages-->
	 <link type="text/css" rel="stylesheet" href="../css/stylesheet_admin.css">
  </head>
  <body>
     <!--main  body-->
	 <div id="main_pages">
	 
	   <!--header-->
	   <header id="header_id">
	    <h1 id="heading"><a href="adminsignin.php">Church Management System</a></h1>
	   </header>
	   
	   <!--navigation bar-->
	   <div>
	     <nav id="nav_page">
	       <ul>
		     <li><a href="../index.php">Home</a></li>
			 <li><a href="../about.php">About Us</a></li>
			 <li><a href="../faith.php">Faith Formation</a></li>
			 <li><a href="../status.php">Check Status</a></li>
			 <li id="signing"><a href="../include/logout.php">Sign Out</a></li>
		   </ul>
	      </nav>
	   </div>
	   
	   <!--side pages-->
	   <div class="side_page">
	      <div id="side_admin">
		    <ul>
		      <li><a href="adminpage.php">Manage Event</a></li>
			  <li><a href="request.php">Manage Request</a></li>
			  <li><a href="subscription.php">View Subscription</a></li>
			  <li><a href="viewuser.php">View User</a></li>
			  <li><a href="appointment.php">Preist Appointment</a></li>
		    </ul>
		  </div>
	   </div>
	   
	   <!--body parts-->
	   <div class="main_page">
	      <form method="post" action ="appointment.php">
		     <table width="350px" border="1px">
			    <tr>
				   <td>ID:</td>
				   <td><input type="text" name="id" placeholder="ID" value="<?php echo $id;?>" /></td>
				</tr>
				<tr>
				  <td>Name:</td>
				  <td><input type="text" name="name" placeholder="Name"  value="<?php echo $name;?>"/></td>
				</tr>
				<tr>
				  <td>Address:</td>
				  <td><input type="text" name="address" placeholder="Address"  value="<?php echo $address;?>"/></td>
				</tr>
				<tr>
				  <td>Phone No.:</td>
				  <td><input type="text" name="phoneno" placeholder="Phone Number"  value="<?php echo $phoneno;?>"/></td>
				</tr>
				<tr>
				  <td>Appointment:</td>
				  <td><input type="text" name="appointment_result" placeholder="Appointment Result"  value="<?php echo $appointment_result;?>"/></td>
				</tr>
				<tr>
				  <td colspan="2" align="center">
				    Approve<input type="radio" name="appointment_result" value="Receive" />
					Cancel<input type="radio" name="appointment_result" value="Cancel" />
				  </td>
				</tr>
				<tr>
				  <td colspan="2" align="center">
				      <input type="submit" value="Search Appointment" name="search" />
					  <input type="submit" value="Set Appointment" name="update" />
				      <input type="submit" value="Cancel Appointment" name="delete" />
				  </td>
				</tr>
			 </table>
		  </form>
		</div>  
	 </div>
  </body>
</html>
<?php
  include("../action/database.php");
  $Id="";
  $Name="";
  $Address="";
  $PhoneNo="";
  $Date ="";
  function getPosts(){
	  $posts=array();
	  $posts[0]=$_POST['Id'];
	  $posts[1]=$_POST['Name'];
	  $posts[2]=$_POST['Address'];
	  $posts[3]=$_POST['PhoneNo'];
	  $posts[4]=$_POST['Date'];
	  return $posts;
  } 
  //search
  if(isset($_POST['search'])){
	  $data = getPosts();
	  $search_sql = "SELECT * FROM contactforappointment WHERE id = '$data[0]'";
	  $search_result = mysqli_query($con, $search_sql);
	  if($search_result){
		  if(mysqli_num_rows($search_result)){
			  while($row=mysqli_fetch_array($search_result)){
				   $Id=$row['Id'];
				   $Name=$row['Name'];
				   $Address=$row['Address'];
				   $PhoneNo=$row['PhoneNo'];
				   $Date=$row['Date'];
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
	  $delete_sql = "DELETE FROM contactforappointment WHERE id = '$data[0]'";
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
	  $update_sql = "UPDATE contactforappointment SET id='$data[0]', Name='$data[1]',Address='$data[2]',PhoneNo='$data[3]', Date='$data[4]'  WHERE id = '$data[0]'";
	  $update_result = mysqli_query($con, $update_sql);
	  if($update_result){
		    echo "<script>alert('Data updated successfully')</script>";
	   }else{
		  echo "<script>alert('Retry again')</script>";
	  }
   }
?>
