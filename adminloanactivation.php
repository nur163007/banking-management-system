<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bms";

$conn= new mysqli($servername, $username, $password,$dbname);
$error="";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_GET['serial_no'])){
	 $serialno= $_GET['serial_no'];
	 $phoneno= $_GET['phone_no'];
	 $status = "Approved";
	 $startdate =date("Y/m/d");
	 $startdated =strtotime(date("Y/m/d"));
	 
	 $update = "update loan set status='$status' where serial_no='$serialno' and phone_no ='$phoneno'";
	 $uptodate =mysqli_query($conn, $update);
	  $sql ="select * from loan WHERE serial_no='$serialno' and phone_no ='$phoneno'";
	  $result = mysqli_query($conn, $sql);
	  while($res=mysqli_fetch_array($result)){
		  $slno= $res['serial_no'];
		  $loantype= $res['loan_type'];
		  $amount= $res['amount'];
		  $date= $res['apply_date'];
		  $duration= $res['term'];
		  
		  $enddate = date("Y/m/d",strtotime($duration));
		  $enddated = strtotime(date("Y/m/d",strtotime($duration)));
		  
		  
		  if($loantype == "personal loan"){
			  $interest ="15";
		  } 
		  else if($loantype == "doctors loan"){
			  $interest ="20";
		  }
		  else if($loantype == "landlord loan"){
			  $interest ="30";
		  }
		   else if($loantype == "business loan"){
			  $interest ="25";
		  }
		   else if($loantype == "govt employee loan"){
			  $interest ="20";
		  }
		  else if($loantype == "teacher loan"){
			  $interest ="15";
		  }
		  else if($loantype == "loan against tdr"){
			  $interest ="20";
		  }
		  else if($loantype == "home loan"){
			  $interest ="25";
		  }
		   else if($loantype == "loan against property"){
			  $interest ="30";
		  }
		   else if($loantype == "flexi home loan"){
			  $interest ="22";
		  }
		   else if($loantype == "swapno"){
			  $interest ="20";
		  }
		   else if($loantype == "apon thikana"){
			  $interest ="20";
		  }
		   else if($loantype == "auto loan"){
			  $interest ="30";
		  }
		  $deffer =$enddated - $startdated;
		  $time =floor($deffer/(60*60*24*365));
		  $rate=$interest/100;
		  $interestrate = $amount*$rate*$time;
		  $payable =$amount+$interestrate;
		  
		  $emim = $payable/floor($deffer/(60*60*24*30));
		  $emiq=  $payable/floor($deffer/(60*60*24*30*3));
		  $emiy=  $payable/floor($deffer/(60*60*24*30*12));
		  
		  
		  $insertloan ="insert into active_loan (serial_no,loan_type,amount,start_date,end_date,duration,interest_rate,payable_amount,emi_m,emi_q,emi_y,status) 
		  VALUES('$slno','$loantype','$amount','$startdate','$enddate','$duration','$interest','$payable','$emim','$emiq','$emiy','$status')";
		  
		  $success =mysqli_query($conn, $insertloan);
		  
		  if($success){
			  header("location: loantransection.php");
		  }
	  }
	  
	  $emailquery ="select * from loan where serial_no ='$serialno'";
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

$mail->Subject = 'Balance loan confirmation';
$mail->Body    = "<h3>Banking Management Sysetm<br>Your loan process is successfully done.<br>now you take your loan.</h3>";

$mail->send();
	}
	catch(Exception $e){
		echo '<script>alert ("Something wrong to process your loan")</script>';
	}
	  
}
}

?>