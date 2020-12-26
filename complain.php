<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
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
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	try{
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                // Enable SMTP authentication
$mail->Username = 'redhuanislamron@gmail.com';                 // SMTP username
$mail->Password = 'mohammadnur32';                         // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('redhuanislamron@gmail.com');
$mail->addAddress('redhuanislamron@gmail.com');     // Add a recipient
   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'BMS complain box';
$mail->Body    = "<h3>Name:$name<br>Email:$email<br>Message:$message";

$mail->send();
echo '<script>window.location="index.php#footerdiv"</script>'; 

echo '<script>alert ("Message sent successfully")</script>';
	}
	catch(Exception $e){
		echo '<script>alert ("Something Wrong")</script>';
	}
}

?>