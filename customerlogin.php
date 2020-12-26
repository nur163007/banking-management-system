<?php
session_start();
include 'sendmail.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bms";

$conn= new mysqli($servername, $username, $password,$dbname);
$error="";
$errorlog="";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit'])){
	 $accountno = $_POST['account_no'];
      $pincode = $_POST['pin_code'];
	  
	  $query = "SELECT * from customer_account where account_no ='$accountno'";
	  $result = mysqli_query($conn,$query);
	  
	  while($row = mysqli_fetch_array($result)){
		$_SESSION['customer_name'] = $row['customer_name'];
		$_SESSION['date_of_birth'] = $row['date_of_birth'];
		$_SESSION['phone_no'] = $row['phone_no'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['address'] = $row['address'];
		$_SESSION['city'] = $row['city'];
		$_SESSION['post_code'] = $row['post_code'];
		$_SESSION['gender'] = $row['gender'];
		$_SESSION['maritial_status'] = $row['maritial_status'];
		$_SESSION['religion'] = $row['religion'];
		$_SESSION['educational_qualification'] = $row['educational_qualification'];
		$_SESSION['citizen'] = $row['citizen'];
		$_SESSION['existing_account'] = $row['existing_account'];
		$_SESSION['income'] = $row['income'];
		$_SESSION['account_type'] = $row['account_type'];
		$_SESSION['account_no'] = $row['account_no'];
		$_SESSION['pin_code'] = $row['pin_code'];
		$_SESSION['file'] = $row['file'];
        
		$status = $row['status'];
           
		   if($status == "Not Approved"){
			   echo '<script>alert("You cannot login until approved your account.");</script>';
		   }
		    else if($status == "Terminated"){
			   echo '<script>alert("Your account is Terminated.");</script>';
		   
		  }
		  
		  else if($status == "Rejected"){
			   echo '<script>alert("Your account is Rejected.");</script>';
		   }
		   else{
		

		 $sql =("SELECT * FROM customer_account WHERE account_no = '$accountno' and pin_code = '$pincode' and status = 'Approved' limit 1");
	  
	  $output = mysqli_query($conn,$sql);
	  $count = mysqli_num_rows($output);
if ($count == 1) {
		
        header("location:customerprofile.php");
   
} 
else {
	        echo '<script>alert("Your Username or Password is incorrect");</script>';
      }	

	  }
	
	  }
	 
}
$conn->close();
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
				<script src="jquery-3.5.1.min.js"></script>
				
				<link rel="stylesheet" href="customer.css">
				<title>BMS</title>
			  </head>
			  <body>
			  <img src="wave.jpg" class="wave"alt="not found"/>
			  <div class="container">
			  <div class="picture">
			  <img src="customersignin.svg"alt="not found"/>
			  </div>
			   <div class="login-container">
			   <form action=""method="post">
			   <img src="profileimage1.svg"class="avater"alt="not found"/>
			   <h2>Welcome</h2>
			   <div class="input-div one">
			   <div class="i">
			   <i class="fa fa-user"></i>
			   </div>
			   <div>
			   <h5>Account Number</h5>
			   <input type="text"class="input"name="account_no"required>
			   </div>
			   </div>
			   
			   <div class="input-div two">
			   <div class="i">
			   <i class="fa fa-lock"></i>
			   </div>
			   <div>
			   <h5>Pin code</h5>
			   <input type="password"class="input"id="pincode"name="pin_code"required>
			   
			   </div>
			   </div>
			   <span class="eye" onclick="myFunction()"><i id="hide1"class="fa fa-eye"></i>
			  <i id="hide2"class="fa fa-eye-slash"></i></span>
			   <div class="foot">
			   <i class="fa fa-arrow-circle-left"></i><a href="index.php"class="home">Go Back</a>
			   <a href="customerforgot.php"class="forgot">Forgot Password?</a>
			   </div>
			   <input type="submit"class="btn"name="submit"value="Login">
			   </form>
			  </div>
			  </div>
			  
			  
			  <script>
			  function myFunction(){
				  var x = document.getElementById("pincode");
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
			  </script>
			  
			  <script src="jquery-1.12.4.min.js"></script>
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   <script src="app.js"></script>
			   <script src="customer.js"></script>
			   
			  </body>
			</html>