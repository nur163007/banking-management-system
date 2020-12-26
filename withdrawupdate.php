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

   $emailquery ="select * from customer_account where account_no ='$accountno'";
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

$mail->setFrom('redhuanislamron@gmail.com');
$mail->addAddress($emailacc);     // Add a recipient
   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Balance withdrawl confirmation';
$mail->Body    = "<h3>Banking Management Sysetm<br>Your Withdrawl process is successfully done.<br>please check your account balance.</h3>";

$mail->send();
	}
	catch(Exception $e){
		echo '<script>alert ("Something wrong to withdraw")</script>';
	}
   }
   
   
$update = "UPDATE customer_fund SET withdrawl = 'Accepted' WHERE account_no = '$accountno'";
$result = mysqli_query($conn,$update);
if($result){
	    $foradd ="select * from customer_fund where account_no='$accountno'";
	    $addsum=mysqli_query($conn,$foradd);
			  while($addition = mysqli_fetch_array($addsum)){
		                 
				   $statuscheck =$addition['withdrawl'];
				   $tran_no =$addition['transection_no'];

				  if($statuscheck == "Accepted") {
				   
				   
			      $sel ="select * from transection where transection_no = '$tran_no'";
			      $sel1 = mysqli_query($conn, $sel);
			     while($deposit = mysqli_fetch_array($sel1)){
					  $tran_id =$deposit['transection_id'];
					  $trandate =$deposit['date'];
					  $tranremark =$deposit['remark'];
					  $trandebit =$deposit['debit'];
					  $trancredit =$deposit['credit'];
					  $tranbalance =$deposit['balance'];
					  $tranphone =$deposit['phone_no'];
					  $tranterm =$deposit['term'];
					  $transtatus =$deposit['deposit'];
					  $tran =$deposit['transection_no'];
					  
				$transection="update transection set withdrawl='Accepted' where transection_no= '$tran_no'";
				$transect = mysqli_query($conn, $transection);
				
				if($transect==true){
					$uptodate ="UPDATE customer_fund set amount='$tranbalance' where transection_no='$tran'";
					$fundupdate = mysqli_query($conn, $uptodate);
				}
				
                echo '<script>alert ("Succesfully withdrawl balance")</script>';
               echo '<script>window.location="adminstatement.php"</script>';
			   
}

}
else{
	echo '<script>alert("transection failed");</script>';
}
}
}

?>