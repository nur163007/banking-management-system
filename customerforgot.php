<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
$mail = new PHPMailer(true);
$alert ='';
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

      $email = $_POST['email'];


	$emailquery="select * from customer_account where email='$email'";
	$equery=mysqli_query($conn,$emailquery);
	$emailcount=mysqli_num_rows($equery);
	
	if($emailcount>0){
						  
			  
			  $id=mysqli_insert_id($conn);
$url='http://'.$_SERVER['SERVER_NAME'].'/final/project/customerrecover.php?account_no='.$id.'&email='.$email;

			 
				  
				  try{
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                // Enable SMTP authentication
$mail->Username = 'redhuanislamron@gmail.com';                 // SMTP username
$mail->Password = 'mohammadnur32';                         // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('redhuanislamron@gmail.com');
$mail->addAddress($email);     // Add a recipient
   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Password Recovery';
$mail->Body    = "<h3>Banking Management Sysetm<br>please click the link to recover your password:<br>$url</h3>";

$mail->send();
echo '<script>alert ("Password recovery code sent to your email please recover password")</script>';
	}
	catch(Exception $e){
		echo '<script>alert ("Something wrong to sent the code please try again")</script>';
	} 
			 
			 
	
	}
	else{
				echo '<script>alert ("Account does not exists.")</script>';

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
			   <div class="input-div one">
			   <div class="i">
			   <i class="fa fa-envelope"></i>
			   </div>
			   <div>
			   <h5>Email Address</h5>
			   <input type="email"class="input"name="email"required>
			   </div>
			   </div>
			   
			   <div class="foot">
			   <i class="fa fa-arrow-circle-left"></i><a href="customerlogin.php"class="home">Go Back</a>
			   </div>
			   <input type="submit"class="btn"name="submit"value="Submit">
			   </form>
			  </div>
			  </div>
			  
			  
			  <script src="jquery-1.12.4.min.js"></script>
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   <script src="app.js"></script>
			   <script src="customer.js"></script>
			   
			  </body>
			</html>