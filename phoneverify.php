<?php
session_start();
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


if(isset($_POST['submit'])){
	$otp = $_POST['otp']; 
    $accountno=$_SESSION['account_no'];


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
				   $code = $subtract['otp'];
                    
					 if($otp == $code) {
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
					  $updated ="UPDATE customer_fund set amount='$balance', otp='0' where transection_no='$tran_no'";
					  $updatefund = mysqli_query($conn, $updated);
					
				
				}
				
                echo '<script>alert ("Succesfully transfer the balance")</script>';
               echo '<script>window.location="statement.php"</script>';
               




}

}
}
else{
	echo '<script>alert ("Verification failed please try again")</script>';
}



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
				<script src="jquery-3.5.1.min.js"></script>
				
				
				<link rel="stylesheet" href="customerprofile.css">
				<title>BMS</title>
			  </head>
			  <body>	
			   <input type="checkbox"id="check">
                        <!-- header navbar starts-->
		    <div class="wrapper">
			    <div class="headertop">
				       <label for="check">
			              <i class="fa fa-bars sidebar_btn"></i>
			            </label>
			        <div class="header_menu">
			           <div class="title"> <h3>B<span>ank</span>M<span>anagement</span>S<span>ystem</span></h3> </div>
			                    
			  <ul>
			  <li> <a href="#"id="profile"><i class="fa fa-user"></i></a></li>
			  </ul>
			  <div class="logoutdiv">
			  <div class="container-fluid name">
			  <h5 class="text-dark"><?php echo  $_SESSION["customer_name"]?></h5>
			  <h6 class="text-dark"><?php echo  $_SESSION["account_type"]?></h6>
			    <hr>
			  <a href="customerviewprofile.php" class="text-dark"><i class="fa fa-user-o"></i> Profile</a>
			  <hr>
			  <a href="customerpassword.php" class="text-dark"><i class="fa fa-edit"></i> Change Password</a>
			 <hr>
			  <a href="customerlogout.php" class="text-dark"><i class="fa fa-power-off"></i> logout</a>
			    </div>
			    </div>
			    </div>
			    </div>
			  
				
				
				        <!-- header navbar ends-->

                         <!-- content part start-->
						 
				         <div class="content">
						 
						 <div class="container mt-5">
						 <div class="row">

						 <div class="col-lg-6 col-12 offset-lg-3 contentoption"id="phoneverify">
		 
							
						 <form action=""method="post">
						 
						 <div class="payee-form col-lg-8 col-12 mt-5">
						 <h2 class="payee-head">Account Verification</h2>
						 </div>
						 <div class="row">
						 
						 <div class="input-payee col-lg-10 col-12 offset-lg-1 mt-3">
						 <input type="text"class="form-control"name="otp"placeholder="Enter 5 digit otp">
						 </div>
 
						 <div class="input-btn col-lg-4 col-12 offset-lg-1 mt-3">
						 <input type="submit"class="submit-button"name="submit"value="verify account">
						 </div>
						 
						 
						 </div>
						 					 
						 </form>

						 
						 </div>
						 
						 </div>
						 </div>
						 </div>
		
				         <!-- content part end-->
				       <!-- loader part start-->
			
				
				
				<!-- loader part end-->
	
				</div>
				
				<script type="text/javascript">
				$(document).ready(function(){
				var out = $(".logoutdiv");
				var status = false;
				$("#profile").click(function(event){
				event.preventDefault();
				if(status == false){
				out.fadeIn();
				status = true;
				}
				else{
				out.fadeOut();
				status = false;
				}
				});
				});

				 </script>
				
				<!-- Optional JavaScript -->
			   
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   <script src="jquery.waypoints.min.js"></script>
			   <script src="jquery.counterup.min.js"></script>
			   
			   
			   
			   <script src="custom.js"></script>
			  
			  </body>
			</html>