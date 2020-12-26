<?php
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

if(isset($_POST['forgot'])){

      $email = $_POST['email'];


	$emailquery="select * from registration where email='$email'";
	$equery=mysqli_query($conn,$emailquery);
	$emailcount=mysqli_num_rows($equery);
	
	if($emailcount>0){
						  
			  
			  $id=mysqli_insert_id($conn);
$url='http://'.$_SERVER['SERVER_NAME'].'/final/project/recover.php?employee_id='.$id.'&email='.$email;

			 
				  
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
			  <h2 class="title">Recover Password<span><a href="loginres.php"id="profile"><i class="fa fa-times-circle"></i></a></span></h2>
			  
			   <div class="input-field">
			  <i class="fa fa-envelope"></i>
			  <input type="email" name="email" id="email"required autocomplete="off"placeholder="Enter Your Email">
               </div>
			  
			  <input type="submit" name="forgot" value="Send Code" class="btn solid">

			  </form>
		
			  </div>
			  </div>
			  
			  
			  
			  
			  
			  
			  <script src="jquery-1.12.4.min.js"></script>
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   <script src="jquery.waypoints.min.js"></script>
			   <script src="jquery.counterup.min.js"></script>
			   
			   
			   
			   <script src="custom.js"></script>
			  </body>
			  </html>