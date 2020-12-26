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
 
 $idquery = "select * from registration order by employee_id desc limit 1";
 $idoutput = mysqli_query($conn,$idquery);
	$idcount=mysqli_fetch_array($idoutput);
	$lastid = $idcount['employee_id'];
	if($lastid == ""){
		$emp_id = (rand('111000', '111111'));
	}
	else{
		$emp_id = substr($lastid,6);
		$emp_id = intval($emp_id);
		$emp_id = (rand('111000', '111111'));	
	}

if(isset($_POST['register'])){
	 $id = $_POST['employee_id'];
	 $fname = $_POST['name'];
	 $branch = $_POST['branch'];
	 $mydesignation = $_POST['designation'];
	 $mypassword = $_POST['password'];
	 $confirmpassword = $_POST['c_password'];
      $dateofbirth = $_POST['date_of_birth'];
      $myaddress = $_POST['address'];
      $mobile = $_POST['mobile_no'];
      $email = $_POST['email'];
	  $token=md5(rand('100', '999'));
	  $status ="Inactive";

	$emailquery="select * from registration where email='$email'";
	$equery=mysqli_query($conn,$emailquery);
	$emailcount=mysqli_num_rows($equery);
	
	if($emailcount>0){
		echo '<script>alert ("Email already exists")</script>';
	}
	else{
		
	if($mypassword !== $confirmpassword){
		echo '<script>alert ("Password not Matched")</script>';
	}
	else{
		$sql ="INSERT INTO registration (employee_id, name,branch, designation,password,date_of_birth,address,mobile_no,email,token,status) VALUES ('$id','$fname','$branch','$mydesignation','$mypassword','$dateofbirth','$myaddress','$mobile', '$email','$token','$status')";			  
			  
			  $id=mysqli_insert_id($conn);
$url='http://'.$_SERVER['SERVER_NAME'].'/final/project/verify.php?employee_id='.$id.'&token='.$token;

         $result=mysqli_query($conn,$sql);
			  
			  if($result == true){
				  
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

$mail->Subject = 'Account verification confirmation';
$mail->Body    = "<h3>Banking Management Sysetm<br>please click the link to verify your account:<br>$url</h3>";

$mail->send();
echo '<script>alert ("Verificatin code sent to your email please verified your account")</script>';
echo '<script>window.location="loginres.php"</script>'; 
	}
	catch(Exception $e){
		echo '<script>alert ("Something wrong to sent the code please try again")</script>';
	} 
			  }
	
	}
	}
}

?>
