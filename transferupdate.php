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

$mail->Subject = 'Balance transfer confirmation';
$mail->Body    = "<h3>Banking Management Sysetm<br>Your transfer process is successfully done.<br>please check your account balance.</h3>";

$mail->send();
	}
	catch(Exception $e){
		echo '<script>alert ("Something wrong to transfer")</script>';
	}
   }
   

$update = "UPDATE customer_fund SET transfer = 'Accepted' WHERE account_no = '$accountno'";
$result = mysqli_query($conn,$update);
if($result){
	    $forsub ="select * from customer_fund where account_no='$accountno'";
	    $addsub=mysqli_query($conn,$forsub);
			  while($subtract = mysqli_fetch_array($addsub)){
		   
				   $statuscheck = $subtract['transfer'];
				   $tran_no = $subtract['transection_no'];
				   $cus_payee = $subtract['payee_account_no'];

				  if($statuscheck == "Accepted") {
				   
				   
			      $sel ="select * from transection where transection_no = '$tran_no'";
			      $sel1 = mysqli_query($conn, $sel);
			     while($tranfer = mysqli_fetch_array($sel1)){
					  $tran_id =$tranfer['transection_id'];
					  $trandate =$tranfer['date'];
					  $tranremark =$tranfer['remark'];
					  $trandebit =$tranfer['debit'];
					  $trancredit =$tranfer['credit'];
					  $balance =$tranfer['balance'];
					  $tranphone =$tranfer['phone_no'];
					  $tranterm =$tranfer['term'];
					  $transtatus =$tranfer['transfer'];
					  $tran =$tranfer['transection_no'];
					  $tranpayee =$tranfer['payee_account_no'];
					  
					  
				    if($transtatus == "Pending"){
					
				 							
				   $payee ="select * from customer_fund where payee_account_no='$tranpayee'";
	               $payeesum=mysqli_query($conn,$payee);
			       while($payeeadd = mysqli_fetch_array($payeesum)){
				   $payeecheck = $payeeadd['transfer'];
			       $summation = $payeeadd['amount'];
				   $accno = $payeeadd['account_no'];
				   $payeeaccno = $payeeadd['payee_account_no'];
				   $total =0;
				   $amount1 = $total+$summation+$trandebit;
			      $updatepayeesum ="update customer_fund set amount='$amount1' where payee_account_no='$tranpayee'";
			      $balancepayeesum = mysqli_query($conn, $updatepayeesum);

     if($accno == $payeeaccno){
$emailq ="select * from customer_account where account_no ='$accno'";
   $emailp=mysqli_query($conn, $emailq);
   while($emailps = mysqli_fetch_array($emailp)) {
	   $emailac=$emailps['email'];
	    try{
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                // Enable SMTP authentication
$mail->Username = 'redhuanislamron@gmail.com';                 // SMTP username
$mail->Password = 'mohammadnur32';                         // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('redhuanislamron@gmail.com');
$mail->addAddress($emailac);     // Add a recipient
   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Balance transfer confirmation';
$mail->Body    = "<h3>Banking Management Sysetm<br>Your transfer balance is $trandebit tk add successfully to your account.<br>please check your account balance.</h3>";

$mail->send();
	}
	catch(Exception $e){
		echo '<script>alert ("Something wrong to transfer")</script>';
	}
   }
   }
   
				
				}
				}
				
				$transections="update transection set transfer='Accepted' where transection_no= '$tran_no'";
				$transects = mysqli_query($conn, $transections);
				if($transects == true){
					  $updated ="UPDATE customer_fund set amount='$balance' where transection_no='$tran_no'";
					  $updatefund = mysqli_query($conn, $updated);
					
				
				}
				
                echo '<script>alert ("Succesfully transfer the balance")</script>';
               echo '<script>window.location="statement.php"</script>';
               




}

}

}
}

?>