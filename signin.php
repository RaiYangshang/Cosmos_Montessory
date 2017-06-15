<!doctype html>
<html>
     <head>
         <title>Montessori Management System</title>
	     <center><img src="Start1.jpg" height="250"><center>
         <link rel="shortcut icon" href="Start1.jpg" />
     </head>
 <body bgcolor="F3F164">
        <ul id="menu">
			<h1>
			<center>
			<a href="1st.html">Home</a>|
			<a href="about.html">About Us</a>|
			<a href="program.html">Our Programs</a>|
			<a href="photo.html">Photo Gallary</a>|
			<a href="contact.html">Contact Us</a>|
			<center>
			</h1>
	    </ul>
		
		     <table border="1" align="center">
			  <tr>
	              <td>User Name:</td>
	              <td><input type="text" name="username" placeholder="UserName"></td>
	            </tr>
	            <tr>
	              <td>Password:</td>
	              <td><input type="password" name="password" placeholder="Password"></td>
	            </tr>
			</table>
		                   <center><td><input type="submit" value="Sign In" name="signin"></td></center>

		<div id="footer">
			<div>
				<p><center> Cosmos Montessori School 2017 | PO Box 554422 Willton Toranto Road | Willton, MD 557364 <center></p>
			</div>
		</div>
		
<?php
  session_start();
  include("include/database.php");
  if(isset($_POST['signin'])){
	  $username=$_POST['UserName'];
	  $password=$_POST['Password'];
	  $sql = "SELECT * FROM admin WHERE UserName='$UserName' AND Password='$Password' ";
	  $result = mysqli_query($con,$sql);
	  if(mysqli_fetch_array($result)){
		  echo "<script>alert('Login Successful')</script>";
	  }else{
		  echo "<script>alert('Retry again')</script>";
	  }
  }
?>
 </body>
</html>


