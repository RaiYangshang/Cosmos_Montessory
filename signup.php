<!doctype html>
<html>
  <head>
         <title>Montessori Management System</title>
	     <center><img src="Start1.jpg" height="250"><center>
         <link rel="shortcut icon" href="Start1.jpg" />
</head>
<body bgcolor="F3CE64">
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
	   <div class="main_page">
	      <form action="signup.php" method="post">
             <table width="350px" border="0px" align="right">
               <tr>
	              <td>User Registration Form</td>
	           </tr>
             </table>
             <table width="350px" border="0px" align="center">
	           <tr>
	             <td>Name:</td>
	             <td><input type="text" name="fname" placeholder="Full Name"></td>
	           </tr>
	           <tr>
	             <td>User Name:</td>
	             <td><input type="text" name="username" placeholder="User Name"></td>
	           </tr>
	           <tr>
	              <td>Email:</td>
	              <td><input type="text" name="email" placeholder="Email"></td>
	           </tr>
	           <tr>
	              <td>Password:</td>
	              <td><input type="password" name="password" placeholder="Password"></td>
	           </tr>
	           <tr>
	             <td>Gender:</td>
	             <td>Male<input type="radio" name="gender" value="male" />Female<input type="radio"  name="gender" value="female" /></td>
	           </tr>
			   <tr>
	              <td>Address:</td>
	               <td><input type="text" name="address" placeholder="Address"></td>
	           </tr>
	           <tr>
	              <td>Phone No.:</td>
	              <td><input type="text" name="phoneno" placeholder="Phone No"></td>
	           </tr>
	           <tr>
	              <td></td>
	              <td><input type="submit" value="Sign Up" name="signup"></td>
	           </tr>
	           <tr>
	              <td></td>
	              <td><input type="submit" value="Sign In" name="signin"></td>
	           </tr>
           </table>
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
  include("include/database.php");
  if(isset($_POST["signup"])){
	  $fname=$_POST['fname'];
	  $username=$_POST['username'];
	  $email=$_POST['email'];
	  $password=$_POST['password'];
	  $address=$_POST['address'];
	  $phoneno=$_POST['phoneno'];
	  $occupation=$_POST['occupation'];
	  $gender=$_POST['gender'];
	  #$date=date("d/m/y");
	  $sql="INSERT INTO registration(fname,username,email,password,address,phoneno,occupation,gender,date) VALUES('$fname','$username','$email','$password','$address','$phoneno','$occupation','$gender',NOW())";
	  $result=mysqli_query($con,$sql);
	  if($result){
		  echo "<script>alert('Successfull');</script>";
	  }else{
		  echo "<script>alert('Retry');</script>";
	  }
  }
?>