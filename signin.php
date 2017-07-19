<!doctype html>
<html>
     <head>
         <title>Montessori Management System</title>
	     <center><img src="img/Start1.jpg" height="250"><center>
         <link rel="shortcut icon" href="Start1.jpg" />
     </head>
 <body bgcolor="F3F164">
        <ul id="menu">
			<h1>
			<center>
			<a href="index.php">Home</a>|
			<a href="about.php">About Us</a>|
			<a href="program.php">Our Programs</a>|
			<a href="photo.php">Photo Gallary</a>|
			<a href="contact.php">Contact Us</a>|
			<a href="signup.php">Registration</a>|
			
			</center>
			</h1>
	    </ul>
		
		<form action="signin.php" method="post">
		     <table  align="center">
			  <tr>
	              <td>User Name:</td>
	              <td><input type="text" name="username" placeholder="UserName"></td>
	            </tr>
	            <tr>
	              <td>Password:</td>
	              <td><input type="password" name="password" placeholder="Password"></td>
	            </tr>
				<tr>
	              <td></td>
	              <td><input type="submit" value="Log In" name="signin"></td>
	            </tr>
			</table>
		             
		</form>
		
		<div id="footer">
			<div>
				<p><center> Cosmos Montessori School 2017 | PO Box 554422 Willton Toranto Road | Willton, MD 557364 <center></p>
			</div>
		</div>
</body>
</html>
<?php
  session_start();
  include("action/database.php");
  
  if(isset($_POST["signin"])){
	  $username=$_POST['username'];
	  $password=$_POST['password'];		  
		  
	  $sql = "SELECT * FROM registration WHERE username='$username' AND password='$password' ";
	  $result = mysqli_query($con,$sql);
	  $ret=mysqli_fetch_array($result);
	  if($ret){
		  echo "<script>alert('Login Successful');</script>";
		  if($ret['username']=='admin' and $ret['password']=='admin')
		  {			  
			  $_SESSION['login']='yes';
			  header('location:admin/adminDashboard.php');
		  }
		  else{
			  
			  $_SESSION['login']='yes';
			  $_SESSION['user'] = $username;
			  header('location:user/userDashboard.php');
		  }
	  }else{
		  echo "<script>alert('Login unsuccessfull. Please retry again');</script>";
	  }
	  
	  
  }
?>



