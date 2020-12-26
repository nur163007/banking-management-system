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
	   $date = $_POST['date'];
	   $day = $_POST['day'];
	   $time = $_POST['time'];
	   $link = $_POST['link'];
	
	 $emailquery ="select email from registration";
   $emails=mysqli_query($conn, $emailquery);
   while($emailsent = mysqli_fetch_array($emails)) {
	   $emailacc=$emailsent['email'];
	    try{
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                // Enable SMTP authentication
$mail->Username = 'redhuanislamron@gmail.com';                 // SMTP username
$mail->Password = 'mohammadnur32';                         // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('redhuanislamron@gmail.com.com');
$mail->addAddress($emailacc);     // Add a recipient
   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Meeting for Management';
$mail->Body    = "<h3><b>Banking Management Sysetm</b><br> Arranged a meeting for management process on $date $day at $time.<br>You have to  click the link on that day timely to join the meeting<br> $link<br><br><br><br> Thank you.</h3>";

$mail->send();
echo '<script>alert ("Message sent to all successfully")</script>';
echo '<script>window.location="dashboard.php"</script>'; 

	}
	catch(Exception $e){
		echo '<script>alert ("Something Wrong")</script>';
	}
}
}
?>