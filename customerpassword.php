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

if(isset($_POST['submit'])){
	  $accountno = $_POST['account_no'];
      $oldpin = $_POST['o_pin_code'];
      $pin = $_POST['pin_code'];
      $confirmpin = $_POST['c_pin_code'];
	  
	  $query = "SELECT pin_code from customer_account where account_no ='$accountno'";
	  $result = mysqli_query($conn,$query);
	  
	  while($row = mysqli_fetch_array($result)){
		$pindata = $row['pin_code'];
		if($pindata == $oldpin){
			if($pin == $confirmpin){
				$sql ="UPDATE customer_account SET pin_code='$pin' WHERE account_no ='$accountno'";
				$update = mysqli_query($conn,$sql);
				if($update){
	$error = "Pin Change Successfully";
	//header("location:loginres.php");
}
else{
	$error = "Can not change the pin";
	
}

			}else{
				$error = "New Pin and Confirm pin do not match";
			}
		}else{
			$error = "Previous Pin is Incorrect";
		}
		
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
			   <div style = "font-size:16px; color:red; margin-top:0px;margin-bottom:20px;" align="center"><?php echo $error; ?></div>
			 
			   <div class="input-div one">
			   <div class="i">
			   <i class="fa fa-keyboard-o text-success"></i>
			   </div>
			   <div>
			   <h4 style="position:absolute;left:10px;margin-top:-5%!important;color:#999;font-size:18px;">Account No</h4>
			   <input type="text"class="input"id="accountno"name="account_no"required readonly value="<?php echo $_SESSION["account_no"]?>">
			   </div>
			   </div>
			   
			   <div class="input-div one">
			   <div class="i">
			   <i class="fa fa-lock"></i>
			   </div>
			   <div>
			   <h5>Previous Pin Code</h5>
			   <input type="password"class="input"id="pincode2"name="o_pin_code"required >
			   </div>
			   </div>
			   
			  <span class="eye eye1" onclick="myFunction2()"><i id="hide5"class="fa fa-eye"></i>
			  <i id="hide6"class="fa fa-eye-slash"></i></span>
			  
			  <div class="input-div one">
			   <div class="i">
			   <i class="fa fa-lock"></i>
			   </div>
			   <div>
			   <h5>New Pin Code</h5>
			   <input type="password"class="input"id="pincode1"name="pin_code"required>
			   </div>
			   </div>
			  <span class="eye eye1" onclick="myFunction1()"><i id="hide3"class="fa fa-eye"></i>
			  <i id="hide4"class="fa fa-eye-slash"></i></span>
			  
			  
			   <div class="input-div two">
			   <div class="i">
			   <i class="fa fa-lock"></i>
			   </div>
			   <div>
			   <h5>Confirm Pin Code</h5>
			   <input type="password"class="input"id="pincode"name="c_pin_code"required>
			   
			   </div>
			   </div>
			   <span class="eye" onclick="myFunction()"><i id="hide1"class="fa fa-eye"></i>
			  <i id="hide2"class="fa fa-eye-slash"></i></span>
			   <div class="foot">
			   <i class="fa fa-arrow-circle-left"></i><a href="customerprofile.php"class="home">Go Back</a>
			   </div>
			   <input type="submit"class="btn"name="submit"value="Change Pin">
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
			  
			  function myFunction1(){
				  var x = document.getElementById("pincode1");
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
				  var x = document.getElementById("pincode2");
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
				  
			  </script>
			  
			  <script src="jquery-1.12.4.min.js"></script>
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   <script src="app.js"></script>
			   <script src="customer.js"></script>
			   
			  </body>
			</html>