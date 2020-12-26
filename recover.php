<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bms";

$conn= new mysqli($servername, $username, $password,$dbname);
$error="";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	
if(isset($_POST['change'])){
	   $email=$_GET['email'];
      $password = $_POST['password'];
      $cpassword = $_POST['c_password'];
	  
			if($password == $cpassword){
				$sql ="UPDATE registration SET password='$password' WHERE email ='$email'";
				$update = mysqli_query($conn,$sql);
				if($update){
	$error = "Password Change Successfully";
	//header("location:loginres.php");
}
else{
	$error = "Can not change the password";
	
}

			}else{
				$error = "New Password and Confirm password do not match";
			}
		
		
	  }
	  

?>

<html lang="en">
			  <head>
				<!-- Required meta tags -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="shortcut icon" href="card.jpg"/>
                
				<!-- Bootstrap CSS -->
				<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|PT+Sans:400,700&display=swap" rel="stylesheet">
				<link rel="stylesheet" href="bootstrap.min.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
				<script src="a076d05399.js"></script>
				
				<link rel="stylesheet" href="password.css">
				<title>BMS</title>
			  </head>
			  <body>
			  <img class="wave" src="waveforpassword.png"alt="not found">
			  
			  <div class="container">
			  
			  <div class="image">
			  <img src="forgotpass.svg"alt="not found">
			  </div>
			  
			  <div class="password-change">
			  <form action="" method="post">
			  <h2 class="title">Password Change form<span><a href="loginres.php"id="profile"><i class="fa fa-times-circle"></i></a></span></h2>
			  
			  <div style = "font-size:16px; color:red; margin-top:10px" align="center"><?php echo $error; ?></div>
			 			   
			  <div class="input-field">
			  <i class="fa fa-lock"></i>
			  <input type="password" name="password" id="password"required autocomplete="off"placeholder="Enter Your New Password">
              <span class="eye" onclick="myFunction()"><i id="hide1"class="fa fa-eye"></i>
			  <i id="hide2"class="fa fa-eye-slash"></i></span>
			  </div>
			  
			  <div class="input-field">
			  <i class="fa fa-lock"></i>
			  <input type="password"name="c_password" id="myInput"required autocomplete="off"placeholder="Confirm Your Password">
              <span class="eye" onclick="myFunction1()"><i id="hide3"class="fa fa-eye"></i>
			  <i id="hide4"class="fa fa-eye-slash"></i></span>
			  </div>
			  
			  <input type="submit" name="change" value="Change Password" class="btn solid">

			  </form>
		
			  </div>
			  </div>
			  
			  
			  <script>
			  function myFunction(){
				  var x = document.getElementById("password");
				  var y = document.getElementById("hide1");
				  var z = document.getElementById("hide2");
				  
				  if(x.type === 'password'){
					  x.type = "text";
					  y.style.display = "block";
					  z.style.display = "none";
				  }
				  else{
					  x.type = "password";
					  y.style.display = "none";
					  z.style.display = "block";
				  }
			  }
			  function myFunction1(){
				  var x = document.getElementById("myInput");
				  var y = document.getElementById("hide3");
				  var z = document.getElementById("hide4");
				  
				  if(x.type === 'password'){
					  x.type = "text";
					  y.style.display = "block";
					  z.style.display = "none";
				  }
				  else{
					  x.type = "password";
					  y.style.display = "none";
					  z.style.display = "block";
				  }
			  }
			  
			  </script>
			  
			  
			  
			  <script src="jquery-1.12.4.min.js"></script>
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   <script src="jquery.waypoints.min.js"></script>
			   <script src="jquery.counterup.min.js"></script>
			   
			   
			   
			   <script src="custom.js"></script>
			  </body>
			  </html>