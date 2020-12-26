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
	 $id = $_POST['employee_id'];
      $mypassword = $_POST['password'];
	  
	  $query = "SELECT * from registration where employee_id ='$id'";
	  $result = mysqli_query($conn,$query);
	  
	  while($row = mysqli_fetch_array($result)){
		$_SESSION['name'] = $row['name'];
		$_SESSION['employee_id'] = $row['employee_id'];
		$_SESSION['designation'] = $row['designation'];
		$_SESSION['address'] = $row['address'];
		$_SESSION['branch'] = $row['branch'];
		$_SESSION['mobile_no'] = $row['mobile_no'];
		$_SESSION['email'] = $row['email'];
		$status = $row['status'];
           
		   if($status == "Inactive"){
			   echo '<script>alert("Please Verify Your Email Account");</script>';
		   }
		   else{
		 $sql =("SELECT * FROM registration WHERE employee_id = '$id' and password = '$mypassword' and status = 'active' limit 1");
	  
	  $output = mysqli_query($conn,$sql);
	  $count = mysqli_num_rows($output);
if ($count == 1) {
		
        header("location:main.php");
   
} else {
	        echo '<script>alert("Your User id or Password is incorrect");</script>';
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
				<link rel="stylesheet" href="jquery-ui.min.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
				<script src="jquery-3.5.1.min.js"></script>
				
				<link rel="stylesheet" href="loginregistration.css">
				<title>BMS</title>
			  </head>
			  <body>
			  <div class="container-fluid">
			  <div class="forms-container">
			  <div class="signin-signup">
			  
			   <!-- /*Registration form*/ -->
			  
			  
			  <form action="" class="sign-in-form"method="post"id="registration">
			  <h2 class="title">Admin Signup Form</h2>
			   <div class="input-field">
			  <i class="fa fa-id-card"></i>
			  <input type="text" name="employee_id"id="id"value="<?php echo $emp_id;?>"placeholder="Enter Your Employee ID"readonly>
			  </div>
			  
			  <div class="input-field">
			  <i class="fa fa-user"></i>
			  <input type="text" name="name"id="id"required autocomplete="off"placeholder="Enter Your Name">
			  </div>
			  
			  <div class="input-field">
			  <i class="fa fa-university"></i>
			  <select id="sel1"name="branch"required>
                       <option value=""selected="selected">--Select Your Branch--</option>
                       <option value="Mohakhali Branch">Mohakhali Branch</option>
                       <option value="Banani Branch">Banani Branch</option>
                       <option value="Gulshan Branch">Gulshan Branch</option>
                       <option value="Mirpur Branch">Mirpur Branch</option>
                       <option value="Uttara Branch">Uttara Branch</option>
                 </select>
                </div>
			  
			  <div class="input-field">
			  <i class="fa fa-star"></i>
			  <input type="text" name="designation"id="designation"required autocomplete="off"placeholder="Enter Your Designation">
               </div>
			  
			  <div class="input-field">
			  <i class="fa fa-lock"></i>
			 <input type="password" name="password" id="password"required autocomplete="off"placeholder="Enter Your Password">
			   </div>
			  <span class="eye" onclick="myFunction()"><i id="hide1"class="fa fa-eye"></i>
			  <i id="hide2"class="fa fa-eye-slash"></i></span>
			 
			 <div class="input-field">
			  <i class="fa fa-lock"></i>
			  <input type="password"name="c_password" id="myInput"required autocomplete="off"placeholder="Confirm Your Password">
             </div>
			  <span class="eye" onclick="myFunction1()"><i id="hide3"class="fa fa-eye"></i>
			  <i id="hide4"class="fa fa-eye-slash"></i></span>
			  
			  <div class="input-field">
			  <i class="fa fa-calendar"></i>
			  <input type="text" name="date_of_birth"id="datepicker"required autocomplete="off"placeholder="Enter Your Date of Birth">
              </div>
			  
			  <div class="input-field">
			  <i class="fa fa-map-marker"></i>
			  <input type="text"name="address"id="address"required autocomplete="off"placeholder="Enter Your Address">
              </div>
			  
			  <div class="input-field">
			  <i class="fa fa-phone"></i>
			  <input type="text"name="mobile_no" id="mobile"required autocomplete="off"placeholder="Enter Your Mobile No">
               </div>
			  
			  <div class="input-field">
			  <i class="fa fa-envelope"></i>
			  <input type="email" name="email"id="email"required autocomplete="off"placeholder="Enter Your Email">
              </div>
			  
			  <input type="submit" name="register" value="Sign up" class="btn solid">
			  
			 
			  </form>
			  
			  
			  <!-- /*Login form*/ -->
			  
			  <form action="" class="sign-up-form"method="post" id="login">
			  <h2 class="title">Admin Login Form</h2>
			   <div class="input-field">
			  <i class="fa fa-id-card"></i>
			  <input type="text" name="employee_id"id="id"required autocomplete="off"placeholder="Enter Your Employee ID">
			  </div>
			  
			  <div class="input-field">
			  <i class="fa fa-key"></i>
			  <input type="password"name="password" id="loginpass"required autocomplete="off"placeholder="Enter Your Password">
             </div>
			   <span class="eye" onclick="myFunction2()"><i id="hide5"class="fa fa-eye"></i>
			  <i id="hide6"class="fa fa-eye-slash"></i></span>
			  
			  <input type="submit" name="submit" value="Login" class="btn solid">
			  
			  <p class="social-text one"><a href="forgot.php">Forgotten Password?</a></p>
			  
			  <p class="social-text">Or sign in with social platforms</p>
			  <div class="social-media">
			  <a href="#"class="social-icon fb"><i class="fa fa-facebook-f"></i></a>
			  <a href="#"class="social-icon twitter"><i class="fa fa-twitter"></i></a>
			  <a href="#"class="social-icon google"><i class="fa fa-google"></i></a>
			  <a href="#"class="social-icon insta"><i class="fa fa-linkedin"></i></a>
			  </div>
			  </form>
			  
			  
			 
			  
			  
			  </div>
			  </div>
			  <div class="panels-container">
			  <div class="panel left-panel">
			  <div class="content">
			  <h3>One of us?</h3>
			    <p>Please Login to Your Account</p>
			 <a class="btn transparent" href="index.php"style="padding:7.5px 0;">Home</a>
			  <button class="btn transparent"id="sign-up-btn">Sign In</button>
			  
			  </div>
			  <img src="undraw_maker_launch_crhe.svg"alt="not found" class="image">
			  </div>
			  
			  <div class="panel right-panel">
			  <div class="content">
			  <h3>New here?</h3>
			  <p>Please Registration first for taking the services</p>
			
			  <button class="btn transparent"id="sign-in-btn">Sign Up</button>
			  <a class="btn transparent" href="index.php"style="padding:7.5px 0;">Home</a>
			  </div>
			  <img src="undraw_press_play_bx2d.svg"alt="not found" class="image">
			  </div>
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
			  function myFunction2(){
				  var x = document.getElementById("loginpass");
				  var y = document.getElementById("hide5");
				  var z = document.getElementById("hide6");
				  
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
			  
			  
			  $(document).ready(function(){
				  $('#datepicker').datepicker({
					  dateFormat: "dd-mm-yy",
					  changeMonth:true,
					  changeYear:true
				  });
			  })
			  </script>
			  
			  
			
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   <script src="jquery-ui.min.js"></script>
			   <script src="app.js"></script>
			  </body>
			</html>