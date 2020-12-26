<?php

session_start();

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
$accountquery = "select * from customer_account order by account_no desc limit 1";
 $accountoutput = mysqli_query($conn,$accountquery);
	$accountcount=mysqli_fetch_array($accountoutput);
	$lastid = $accountcount['account_no'];
	if($lastid == ""){
		$acc_no = (rand('1000000000', '1111111111'));
	}
	else{
		$acc_no = substr($lastid,14);
		$acc_no = intval($acc_no);
		$acc_no = (rand('1000000000', '1111111111'));
	}

if(isset($_POST['submit'])){
	 $name = $_POST['customer_name'];
	 $dob = $_POST['date_of_birth'];
	 $mobile = $_POST['phone_no'];
	 $email = $_POST['email'];
	 $address = $_POST['address'];
	 $city = $_POST['city'];
	 $postcode = $_POST['post_code'];
	 $gender = $_POST['gender'];
	 $maritial_status = $_POST['maritial_status'];
	 $religion= $_POST['religion'];
	 $education = $_POST['educational_qualification'];
      $citizen = $_POST['citizen'];
      $oldaccount = $_POST['existing_account'];
      $income = $_POST['income'];
      $account_type = $_POST['account_type'];
      $account_no = $_POST['account_no'];
      $pin_code = $_POST['pin_code'];
      $service = $_POST['service'];
      $token=md5(rand('100', '999'));
	  $status ="Not Approved";
	  
	  $files =$_FILES['file'];
	  
	  $filename = $files['name'];
	  $fileerror = $files['error'];
	  $filestore = $files['tmp_name'];
	  
	  $fileext = explode('.', $filename);
	  $filecheck = strtolower(end($fileext));
	  
	  $stored = array('png','jpg','jpeg');
	  if(in_array($filecheck, $stored)){
		  $destinationfile = 'phpimage/'.$filename;
		  move_uploaded_file($filestore,$destinationfile);
	  }
	  
	  

	$emailquery="select * from customer_account where email='$email'";
	$equery=mysqli_query($conn,$emailquery);
	$emailcount=mysqli_num_rows($equery);
	
	if($oldaccount == "yes"){
		echo '<script>alert ("You have an existing account please Recover it.")</script>';
	}
	else{
	if($emailcount>0){
		echo '<script>alert ("Email already exists")</script>';
	}
	else{
		
		$sql ="INSERT INTO customer_account (customer_name,date_of_birth, phone_no,email,address,city,post_code,gender,maritial_status,religion,educational_qualification,citizen,existing_account,income,account_type,account_no,pin_code,service,file,token,status) VALUES ('$name','$dob','$mobile','$email','$address','$city','$postcode', '$gender','$maritial_status','$religion','$education','$citizen','$oldaccount','$income','$account_type','$account_no','$pin_code','$service','$filename','$token','$status')";			  
			  
         $result=mysqli_query($conn,$sql);
			  
			  if($result == true){
				
                echo '<script>alert ("Succesfully create your account")</script>'; 				
				
			  }
	
	
}
}
 $query="select account_no,customer_name,account_type from customer_account where account_no='$account_no'";
	$pquery=mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($pquery)){
     
	 $caccount = $row['account_no'];
	 $payeecount = $row['account_no'];
	 $cname = $row['customer_name'];
	 $deposit = $row['account_type'];
	 	  
	  $term ="1m";
	  $amount = "0";
	  
	 if($account_no== $caccount && $cname== $name && $account_type == $deposit){
		 $insert ="INSERT INTO customer_fund (payee_account_no,account_no,customer_name,account_type,term,amount) VALUES ('$payeecount','$account_no','$name','$account_type','$term','$amount')";			  
		$result=mysqli_query($conn,$insert);
			  
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
				<link rel="stylesheet" href="jquery-ui.min.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
				<script src="jquery-3.5.1.min.js"></script>
				<script src="a076d05399.js"></script>
				
				
				<link rel="stylesheet" href="open.css">
				<title>BMS</title>
			  </head>
			  <body>	
			 
                        <!-- header navbar starts-->
		    <div class="wrapper">
			    <div class="headertop col-12">
				
				<div class="header_menu">
			<div class="title"> <img src="logo.png"alt="not found"class="profile_image"> </div>
			       
                   <ul>
			         <li> <a href="openaccount.php"class="d-lg-none d-block"><i class="fa fa-arrow-left"></i></a></li>
			       </ul>				   
			    </div>
			       
			    </div>
			  
				
				
				        <!-- header navbar ends-->
						
						
				        <!-- sidebar starts-->
						
						<div class="sidebar">
						<ul>
			             <li> <a href="openaccount.php"class="d-lg-block d-none"><i class="fa fa-arrow-left"></i></a></li>
			           </ul>
						</div>
				        <!-- sidebar ends-->
						
				
				         <!-- content part start-->
						 
				         <div class="content">
						 <div class="dashboard bg-white">
						  <h3 class="text-center text-info">Current Account</h3>
						 </div>
						 
		                 
						 
				 <div class="container">
				<div class="progres-bar col-lg-12 col-12">
				<div class="step">
				<p>1st Step</p>
				<div class="bullet"><span>1</span></div>
				<div class="check fa fa-check"></div>
				</div>
				<div class="step">
				<p>2nd Step</p>
				<div class="bullet"><span>2</span></div>
				<div class="check fa fa-check"></div>
				</div>
				<div class="step">
				<p>3rd Step</p>
				<div class="bullet"><span>3</span></div>
				<div class="check fa fa-check"></div>
				</div>
				</div>
						 <!--form part start -->
				<div class="login-container">
				
			   <form action=""method="post" enctype="multipart/form-data">
			   <div class="page top slidepage" id="toppart">
			   <div class="titletext">
			    <h5 class="text-center text-success">Please fill your personal details</h5>
			   </div> 
			   <div class="row">
			   <div class="input-div one col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-user"></i>
			   </div>
			   <div>
			   <h5>Customer Name<span class="text-danger"id="errorName"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="name"name="customer_name"placeholder="Enter name" required>
			   
			   </div>
			   </div>
			   
			   <div class="input-div two col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-calendar"></i>
			   </div>
			   <div>
			   <h5>Date of Birth<span class="text-danger"id="errorDob"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="datepicker"name="date_of_birth"placeholder="Enter DOB" required>
			   </div>
			   </div>
			   
			   <div class="input-div three col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-phone"></i>
			   </div>
			   <div>
			   <h5>Mobile Number<span class="text-danger"id="errorMobile"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="tel" class="input"id="mobileno"name="phone_no"placeholder="Enter Phone no" maxlength="11" pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}" required>
			   </div>
			   </div>
			   
			   <div class="input-div four col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-envelope"></i>
			   </div>
			   <div>
			   <h5>Email Address<span class="text-danger"id="errorEmail"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="email"class="input"id="emailid"name="email"placeholder="Enter Email" required>
			   </div>
			   </div>
			   
			   <div class="input-div five col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-map-marker"></i>
			   </div>
			   <div>
			   <h5>Address<span class="text-danger"id="errorAddress"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="address"name="address"placeholder="Enter address" required>
			   </div>
			   </div>
			   

			   <div class="input-div six col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-map"></i>
			   </div>
			   <div>
			   <h5>City<span class="text-danger"id="errorCity"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="city"name="city"placeholder="Enter city" required>
			   </div>
			   </div>
			   
			   <div class="input-div seven col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-qrcode"></i>
			   </div>
			   <div>
			   <h5>Post Code<span class="text-danger"id="errorPost"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="postcode"name="post_code"placeholder="Enter post code" maxlength="4"required>
			   </div>
			   </div>
			   </div>
			   
			   <div class="col-lg-3 col-6 NextBtn">
			   <button class="btn-button"id="firstnext">Next</button>
			   </div>
			   </div>
			   
			   
			   
			   <div class="page mid"id="midpart">
			   <div class="titletext">
			    <h5 class="text-center text-success">Please fill your Additional details</h5>
			   </div><br>
			   <div class="row">
			   
			    <div class="input-div eight col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-mars"></i>
			   </div>
			   <div>
			   <h5>Gender<span class="text-danger"id="errorGender"style="font-size:12px;margin-left:15px;"></span></h5>
			   <select id="gender"name="gender"required>
                       <option value=""selected="selected">--Select gender--</option>
                       <option value="male">Male</option>
                       <option value="female">Female</option>
                       <option value="others">Others</option>
                       
                 </select>
				 </div>
			   </div>
			   
			   <div class="input-div nine col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-venus-mars"></i>
			   </div>
			   <div>
			   <h5>Maritial Status<span class="text-danger"id="errorMarried"style="font-size:12px;margin-left:15px;"></span></h5>
			   <select id="married"name="maritial_status"required>
                       <option value=""selected="selected">--Select marritial status--</option>
                       <option value="married">Married</option>
                       <option value="unmarried">Unmarried</option>
                       <option value="others">Others</option>
                       
                 </select>
				 </div>
			   </div>
			   
			   
			    <div class="input-div ten col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-registered"></i>
			   </div>
			   <div>
			   <h5>Religion<span class="text-danger"id="errorReligion"style="font-size:12px;margin-left:15px;"></span></h5>
			   <select id="religion"name="religion"required>
                       <option value=""selected="selected">--Select Religion--</option>
                       <option value="islam">Islam</option>
                       <option value="hindu">Hindu</option>
                       <option value="khristan">Khristan</option>
                       <option value="others">Others</option>
                       
                 </select>
				 </div>
			   </div>
			   
			   <div class="input-div eleven col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-book"></i>
			   </div>
			   <div>
			   <h5>Educational Qualification<span class="text-danger"id="errorEducation"style="font-size:12px;margin-left:15px;"></span></h5>
			   <select id="education"name="educational_qualification"required>
                       <option value=""selected="selected">--Select qualification--</option>
                       <option value="graduate">Graduate</option>
                       <option value="under_graduate">Under Graduate</option>
                       <option value="post_graduate">Post Graduate</option>
                       <option value="others">Others</option> 
                 </select>
				 </div>
			   </div>
			   
			   <div class="input-div twelve col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-universal-access"></i>
			   </div>
			   <div>
			   <h5>Senior Citizen<span class="text-danger"id="errorCitizen"style="font-size:12px;margin-left:15px;"></span></h5>
			   <select id="citizen"name="citizen"required>
                       <option value=""selected="selected">--Select Citizen--</option>
                       <option value="yes">Yes</option>
                       <option value="no">No</option>
                 </select>
				 </div>
			   </div>
			   
			   <div class="input-div thirten col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-user-circle"></i>
			   </div>
			   <div>
			   <h5>Existing Account<span class="text-danger"id="errorOldaccount"style="font-size:12px;margin-left:15px;"></span></h5>
			   <select id="oldaccount"name="existing_account"required>
                       <option value=""selected="selected">--Select Account--</option>
                       <option value="yes">Yes</option>
                       <option value="no">No</option>
                 </select>
				 </div>
			   </div>
			   <div class="input-div fourten col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-money"></i>
			   </div>
			   <div>
			   <h5>Income<span class="text-danger"id="errorIncome"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="income"name="income"placeholder="Enter Income"required>
			   </div>
			   </div>
			   
               </div>
			   
			   <div class="row">
			   <div class="btns col-lg-3 col-6">
			   <button class="btn-button prev-1 prev"id="firstprev">Previous</button>
			   </div>
			   <div class="btns col-lg-3 col-6">
			   <button class="btn-button next-1 next"id="secondnext">Next</button>
			   </div>
			   </div>
			   </div>
			   
			   
			   
			   <div class="page bottom" id="bottompart">
			   <div class="titletext">
			    <h5 class="text-center text-success">Please fill Bank Account details</h5>
			   </div><br>
			   
			   <div class="row">
			   
			   <div class="input-div fiften col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-vcard"></i>
			   </div>
			   <div>
			   <h5>Account Type<span class="text-danger"id="errorAccounttype"style="font-size:12px;margin-left:15px;"></span></h5>
			   <select id="accounttype"name="account_type"required>
                       <option value=""selected="selected">--Select account type--</option>
                       <option value="savings account">Savings Account</option>
                       <option value="fixed deposit account">Fixed Deposit Account</option>
                       <option value="current account">Current Account</option>
                       <option value="recurring deposit account">Recurring Deposit Account</option>
                 </select>
				 </div>
			   </div>
			   
			  
			   <div class="input-div sixten col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-keyboard-o"></i>
			   </div>
			   <div>
			   <h5>Account Number<span class="text-danger"id="errorAccountno"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="accountno"name="account_no"value="<?php echo $acc_no;?>" placeholder="Enter account number"required readonly>
			   </div>
			   </div>
			   
			   <div class="input-div seventen col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-lock"></i>
			   </div>
			   <div>
			   <h5>Pin Code<span class="text-danger"id="errorPincode"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="password"class="input"id="pincode"name="pin_code"placeholder="Enter pin code"required>
			   </div>
			   <span class="eye" onclick="myFunction()"><i id="hide1"class="fa fa-eye"></i>
			  <i id="hide2"class="fa fa-eye-slash"></i></span>
			   </div>
			   
			   <div class="input-div eighten col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-rocket"></i>
			   </div>
			   <div>
			   <h5>Service Required<span class="text-danger"id="errorService"style="font-size:12px;margin-left:15px;"></span></h5>
			   <select id="service"name="service"required>
                       <option value=""selected="selected">--Select Service--</option>
                       <option value="atm card">ATM Card</option>
                       <option value="mobile banking">Mobile Banking</option>
                       <option value="email alerts">Email Alerts</option>
                       <option value="cheque book">Cheque Book</option>
                 </select>
				 </div>
			   </div>
			  
			  
			  <div class="nineten col-lg-5 col-12 ml-3 mt-3">
			   <div>
			   <h5><i class="fa fa-file-photo-o"style="color:#38d39f;"></i> Image<span class="text-danger"id="errorImage"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="file" name="file"id="profileImage"onchange="displayImage(this)"required>
				 </div>
			   </div>
			  
			  <div class="twenty col-lg-5 col-12 m-auto ">
			   <div class="image-preview"id="imagePreview">
		        <img src="previewimage.png"alt="Image Preview"class="image-preview-image"id="profileDisplay"onclick="triggerClick()">
		       </div>
			   </div>
			  
			  
			   </div>
			   
			   <div class="row">
			   <div class="btns col-lg-3 col-6">
			   <button class="btn-button prev-2 prev"id="secondprev">Previous</button>
			   </div>
			   <div class="btns col-lg-3 col-6">
			  <input type="submit" name="submit" value="Submit"class="btn-button submitbtn">
			    </div>
			   </div>
			   
			   </div>
			   
			   
			   </form>
			  </div>
						 					
						 <!--form part end-->
						 
						 
						 </div>
						 
						 </div>
		
				         <!-- content part end-->
				
				
				<!-- loader part start-->
				<div class="loader">
				

  <div class="spinner-grow text-success"></div>
  <div class="spinner-grow text-info"></div>
  <div class="spinner-grow text-warning"></div>
  <div class="spinner-grow text-danger"></div>


				</div>
                 <script type="text/javascript">
				 window.addEventListener("load",function(){
				 const loader=document.querySelector(".loader");
				 loader.className+=" hidden";
				 });
				 
				 
				 $(document).ready(function(){
				  $('#datepicker').datepicker({
					  dateFormat: "dd-mm-yy",
					  changeMonth:true,
					  changeYear:true
				  });
			  })
			  
			  function myFunction(){
				  var x = document.getElementById("pincode");
				  var y = document.getElementById("hide1");
				  var z = document.getElementById("hide2");
				  
				  if(x.type === 'password'){
					  x.type = "text";
					  y.style.display = "block";
					  z.style.display = "none";
				  }
				  else{
					  x.type = "password";
					  y.style.display = "none";
					  z.style.display = "block";
				  }
			  }
				 </script>
				
				
				<!-- loader part end-->
				
	
				</div>
				
				
				
				<!-- Optional JavaScript -->
			   
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   <script src="jquery.waypoints.min.js"></script>
			   <script src="jquery.counterup.min.js"></script>
			   <script src="jquery-ui.min.js"></script>
			 
			 
			   <script src="custom.js"></script>
			   
			   
		        <script type="text/javascript">
				$(document).ready(function(){
	              $("#firstnext").click(function(e){
					  e.preventDefault();
		            $("#errorName").html('');
					$("#errorDob").html('');
					$("#errorMobile").html('');
					$("#errorEmail").html('');
					$("#errorAddress").html('');
					$("#errorCity").html('');
					$("#errorPost").html('');
					 if($("#name").val()==''){
						 $("#errorName").html('*is required');
						 return false;
					 }
					 
					 else if($("#datepicker").val()==''){
						 $("#errorDob").html('*is required');
						 return false;
					 }
					 
					 else if($("#mobileno").val()==''){
						 $("#errorMobile").html('*is required');
						 return false;
					 }
					 else if($("#mobileno").val().length<11){
						 $("#errorMobile").html('*invalid phone no');
						 return false;
					 }
					 
					 else if(isNaN($("#mobileno").val())){
						 $("#errorMobile").html('*Characters not allowed');
						 return false;
					 }
					 
					 else if($("#emailid").val()==''){
						 $("#errorEmail").html('*is required');
						 return false;
					 }
					 else if($("#emailid").val().indexOf('@')<=0){
						 $("#errorEmail").html('*Invalid Email');
						 return false;
					 }
					 
                      else if(($("#emailid").val().charAt($("#emailid").val().length-4)!='.')&&($("#emailid").val().charAt($("#emailid").val().length-3)!='.')){
						 $("#errorEmail").html('*Invalid Email');
						 return false;
					 }
					 
                     else if($("#address").val()==''){
						 $("#errorAddress").html('*is required');
						 return false;
					 } 
					 
					 else if($("#city").val()==''){
						 $("#errorCity").html('*is required');
						 return false;
					 } 
					 
					 else if($("#postcode").val()==''){
						 $("#errorPost").html('*is required');
						 return false;
					 } 
					  else if($("#postcode").val().length<4){
						 $("#errorPost").html('*Wrong Postcode');
						 return false;
					 } 
					  
					 else{
						  $("#midpart").show();
		                  $("#toppart").hide();
					 }
	                   });
					   });
					   
					   $(document).ready(function(){
	              $("#secondnext").click(function(e){
					   e.preventDefault();
		            $("#errorGender").html('');
					$("#errorMarried").html('');
					$("#errorReligion").html('');
					$("#errorEducation").html('');
					$("#errorCitizen").html('');
					$("#errorOldaccount").html('');
					$("#errorIncome").html('');
					  
					  if($("#gender").val()==''){
						 $("#errorGender").html('*is required');
						 return false;
					 }
					  
					  else if($("#married").val()==''){
						 $("#errorMarried").html('*is required');
						 return false;
					 }
					 
					 else if($("#religion").val()==''){
						 $("#errorReligion").html('*is required');
						 return false;
					 }
					 
					   else if($("#education").val()==''){
						 $("#errorEducation").html('*is required');
						 return false;
					 }
					  
					  else if($("#citizen").val()==''){
						 $("#errorCitizen").html('*is required');
						 return false;
					 }
					  
					  else if($("#oldaccount").val()==''){
						 $("#errorOldaccount").html('*is required');
						 return false;
					 }
					 
					 else if($("#income").val()==''){
						 $("#errorIncome").html('*is required');
						 return false;
					 }
					  
					  else if(isNaN($("#income").val())){
						 $("#errorIncome").html('*Characters not allowed');
						 return false;
					 }

					  else{
		             $("#bottompart").show();
		             $("#midpart").hide();
					  }
	                   });
					   });
					   
					   $(document).ready(function(){
	              $("#firstprev").click(function(){
		             $("#toppart").show();
		             $("#midpart").hide();
	                   });
					   });
					   
					   $(document).ready(function(){
	              $("#secondprev").click(function(){
		             $("#midpart").show();
		             $("#bottompart").hide();
	                   });
					   });
					   
const slidePage = document.querySelector(".slidepage");
const firstNextBtn = document.querySelector(".NextBtn");
const firstPrevBtn = document.querySelector(".prev-1");
const secondNextBtn = document.querySelector(".next-1");
const secondPrevBtn = document.querySelector(".prev-2");
const submitBtn = document.querySelector(".submitbtn");
const progresText = document.querySelectorAll(".step p");
const progresCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");

let max = 3;
let current = 1;

firstNextBtn.addEventListener("click", function(){
	bullet[current - 1].classList.add("active");
	progresText[current - 1].classList.add("active");
	progresCheck[current - 1].classList.add("active");
	current += 1;
});

secondNextBtn.addEventListener("click", function(){

	bullet[current - 1].classList.add("active");
	progresText[current - 1].classList.add("active");
	progresCheck[current - 1].classList.add("active");
	current += 1;
});

firstPrevBtn.addEventListener("click", function(){
	bullet[current - 2].classList.remove("active");
	progresText[current - 2].classList.remove("active");
	progresCheck[current - 2].classList.remove("active");
	current -= 1;
});

secondPrevBtn.addEventListener("click", function(){
	bullet[current - 2].classList.remove("active");
	progresText[current - 2].classList.remove("active");
	progresCheck[current - 2].classList.remove("active");
	current -= 1;
});
submitBtn.addEventListener("click", function(){

	bullet[current - 1].classList.add("active");
	progresText[current - 1].classList.add("active");
	progresCheck[current - 1].classList.add("active");
	current += 1;
});
                    
					
					function triggerClick(){
		document.querySelector('#profileImage').click();
		
	}
	function displayImage(e){
		if(e.files[0]){
			var reader = new FileReader();
			
			reader.onload = function(e){
				document.querySelector('#profileDisplay').setAttribute('src',e.target.result);
			}
			reader.readAsDataURL(e.files[0]);
		}
		
	}
				</script>
			  
			  </body>
			</html>