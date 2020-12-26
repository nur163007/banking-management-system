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

$accountno=$_GET['account_no'];


$update = "UPDATE customer_account SET status = 'Approved' WHERE account_no = '$accountno'";
$result = mysqli_query($conn,$update);
if($result){
	$emailquery ="select email from customer_account where account_no='$accountno'";
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

$mail->Subject = 'Account activation message';
$mail->Body    = "<h3><b>Banking Management Sysetm</b><br> Your account is Active.<br>Now You can login to your account.<br><br><br><br> Thank you.</h3>";

$mail->send();
echo '<script>window.location="accountrequest.php"</script>'; 

	}
	catch(Exception $e){
		echo '<script>alert ("Something Wrong")</script>';
	}
}
}

?>