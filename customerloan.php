<?php
session_start(); 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bms";

$conn= new mysqli($servername, $username, $password,$dbname);
$error="";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit'])){
	$name =$_POST['customer_name'];
	$fname =$_POST['f_name'];
	$mname =$_POST['m_name'];
	$dateofbirth =$_POST['date_of_birth'];
	$preaddress =$_POST['pre_address'];
	$peraddress =$_POST['per_address'];
	$phoneno =$_POST['phone_no'];
	$email =$_POST['email'];
	$gender =$_POST['gender'];
	$maritial_status =$_POST['maritial_status'];
	$education =$_POST['education'];
	$occupation =$_POST['occupation'];
	$income =$_POST['income'];
	$gname =$_POST['gurantor_name'];
	$goccupation =$_POST['g_occupation'];
	$gaddress =$_POST['g_address'];
	
	$accountno =$_POST['account_no'];
	$loantype =$_POST['loan_type'];
	$term =$_POST['term'];
	$amount =$_POST['amount'];
		
	 $status ="Pending";
	 
      $gfile =$_FILES['g_file'];
	  $filename = $gfile['name'];
	  $fileerror = $gfile['error'];
	  $filestore = $gfile['tmp_name'];
	  
	  $fileext = explode('.', $filename);
	  $filecheck = strtolower(end($fileext));
	  
	  $stored = array('png','jpg','jpeg');
	  if(in_array($filecheck, $stored)){
		  $destinationfile = 'phpimage/'.$filename;
		  move_uploaded_file($filestore,$destinationfile);
	  }
	  
	  $appfile =$_FILES['appli_file'];
	  $fileapp = $appfile['name'];
	  $apperror = $appfile['error'];
	  $appstore = $appfile['tmp_name'];
	  
	  $appext = explode('.', $fileapp);
	  $appcheck = strtolower(end($appext));
	  
	  $appstored = array('png','jpg','jpeg');
	  if(in_array($appcheck, $appstored)){
		  $appdestination = 'phpimage/'.$fileapp;
		  move_uploaded_file($appstore,$appdestination);
	  }
	  
	 $billfile =$_FILES['bill_file'];
	  $filebill = $billfile['name'];
	  $billerror = $billfile['error'];
	  $billstore = $billfile['tmp_name'];
	  
	  $billext = explode('.', $filebill);
	  $billcheck = strtolower(end($billext));
	  
	  $billstored = array('png','jpg','jpeg');
	  if(in_array($billcheck, $billstored)){
		  $billdestination = 'phpimage/'.$filebill;
		  move_uploaded_file($billstore,$billdestination);
	  }
	
	$query="select *  from customer_account where account_no='$accountno'";
	$pquery=mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($pquery)){
     
	 $caccount = $row['account_no'];
	 $cname = $row['customer_name'];
	 $dob = $row['date_of_birth'];
	 $cemail = $row['email'];
	 $cphone = $row['phone_no'];
	 $cgender = $row['gender'];
	 if($accountno== $caccount && $cname== $name && $dob == $dateofbirth && $cemail==$email && $cphone==$phoneno && $cgender==$gender){
		 
		 $loaninsert ="insert into loan (customer_name,f_name,m_name,date_of_birth,pre_address,per_address,phone_no,email,gender,maritial_status,education,occupation,income,gurantor_name,g_occupation,g_address,g_file,account_no,loan_type,term,amount,appli_file,bill_file,status) 
		 VALUES('$name','$fname','$mname','$dateofbirth','$preaddress','$peraddress','$phoneno','$email','$gender','$maritial_status','$education','$occupation','$income','$gname','$goccupation','$gaddress','$filename','$accountno','$loantype','$term','$amount','$fileapp','$filebill','$status')";
         $loanresult =mysqli_query($conn,$loaninsert);
		 if($loanresult == true){
				
                echo '<script>alert ("Succesfully submit your Information")</script>'; 				
				echo '<script>window.location="loanall.php"</script>';
			  }
}
else{
	 echo '<script>alert ("Invalid information, please try again")</script>'; 				
				
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
						 <div class="dashboard_home">
						  <h4 class="container"><span ><a href="customerprofile.php"><i class="fa fa-home i-items"></i> <span class="hidden-menu">Home</span></a></span><i class="fa fa-angle-right text-info" style="font-size:20px;padding:0 12px;"></i><span class="hidden-menu text-danger">Welcome <span class="text-primary"><?php echo  $_SESSION["customer_name"]?></span></span></h4>
						 </div>
						 <div class="container mt-5">
						 <div class="row">
						 <div class="col-lg-4 col-12 menuoption">
						 
						   <div class="profiledetails">
                            <h5 class="text-white"><i class="fa fa-user"></i> <?php echo  $_SESSION["customer_name"]?></h5>
                           </div>
						   
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
       $accountno = $_SESSION['account_no'];
	 
		 $sel ="select * from customer_fund where account_no='$accountno'";			  
		$result=mysqli_query($conn,$sel);
			while($res = mysqli_fetch_array($result)){  
			  ?>

						   <div class="balance">
                           <h6 class="text-dark"><span class="balance-left"><i class="fa fa-dollar"></i> Your Balance</span><span class="balance-right"><i class="fa fa-dollar"></i> <?php echo $res['amount'];?></span></h6>
                           </div>
						   <?php 
						   }

	                    ?>
						   
						   <ul class="navbar-nav m-auto">

						   <li class="nav-item active mr-auto profileli">
                            <a class="nav-link text-dark" href="customerviewprofile.php"><i class="fa fa-user"></i> View Profile</a>
                           </li>
						   
						   <li class="nav-item mr-auto profileli">
                            <a class="nav-link text-dark" href="customerprofileupdate.php?account_no=<?php echo $_SESSION['account_no'];?>"><i class="fa fa-user"></i> Update Profile</a>
                           </li>
						   
						   <li class="nav-item mr-auto profileli">
                            <a class="nav-link text-dark" href="customerpassword.php"><i class="fa  fa-edit"></i> Change Password</a>
                           </li>
						   
						   </ul>
						   
						   <div class="transectioninfo">
                            <h5 class="text-white"><i class="fa fa-rocket"></i> Transection</h5>
                           </div>
						   <ul class="navbar-nav m-auto">

						   <li class="nav-item active mr-auto profileli">
                            <a class="nav-link text-dark" href="payee.php#payees"><i class="fa fa-user"></i> Add Payee</a>
                           </li>
						   
						   <li class="nav-item mr-auto profileli">
                            <a class="nav-link text-dark" href="payeeinfo.php#info"><i class="fa fa-user"></i> All Payee</a>
                           </li>
						   
						   <li class="nav-item mr-auto profileli">
                            <a class="nav-link text-dark" href="fundtransfer.php#transfer"><i class="fa  fa-edit"></i> Fund Transfer</a>
                           </li>
						   
						   <li class="nav-item mr-auto profileli">
                            <a class="nav-link text-dark" href="funddeposit.php#deposit"><i class="fa  fa-edit"></i> Fund Deposit</a>
                           </li>
						   
						   <li class="nav-item mr-auto profileli">
                            <a class="nav-link text-dark" href="fundwithdraw.php#withdraw"><i class="fa  fa-edit"></i> Fund Withdrawl</a>
                           </li>
						   
						   
						   <li class="nav-item mr-auto profileli">
                            <a class="nav-link text-dark" href="statement.php#statement"><i class="fa  fa-edit"></i> Statement</a>
                           </li>
						   
						   
						   </ul>
						   
						   <div class="transectioninfo">
                            <h5 class="text-white"><i class="fa fa-database"></i> Loan</h5>
                           </div>
						   
						   <ul class="navbar-nav m-auto">

						   <li class="nav-item active mr-auto profileli">
                            <a class="nav-link text-dark" href="customerloan.php#apply"><i class="fa fa-edit"></i> Apply Online</a>
                           </li>
						   
						   <li class="nav-item mr-auto profileli">
                            <a class="nav-link text-dark" href="loanall.php#all"><i class="fa fa-database"></i> All Loans</a>
                           </li>
						   
						   <li class="nav-item mr-auto profileli">
                            <a class="nav-link text-dark" href="loandetails.php#loandet"><i class="fa  fa-edit"></i> Loan Details</a>
                           </li>

						   </ul>
	                         
							 <div class="transectioninfo">
                            <h5 class="text-white"><i class="fa fa-credit-card-alt"></i> Debit/Credit card</h5>
                           </div>
	                        
							<ul class="navbar-nav m-auto">

						   <li class="nav-item active mr-auto profileli">
                            <a class="nav-link text-dark" href="applycard.php#card"><i class="fa fa-credit-card"></i> Apply Online</a>
                           </li>
						   
						   <li class="nav-item mr-auto profileli">
                            <a class="nav-link text-dark" href="showcard.php#show"><i class="fa fa-credit-card"></i> All cards</a>
                           </li>
						   
						    </ul>
							
						 </div>
						 
						 <div class="col-lg-8 col-12 contentoption" id="apply">
						 <div class="payee-form col-lg-8 col-12">
						 <h2 class="payee-head">Online Apply Loan Form</h2>
						 </div>
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
			   <input type="text"class="input"id="name"name="customer_name"value="<?php echo $_SESSION['customer_name'];?>"required readonly>
			   
			   </div>
			   </div>
			   
			   <div class="input-div one col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-user"></i>
			   </div>
			   <div>
			   <h5>Father's Name<span class="text-danger"id="errorfName"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="fname"name="f_name"placeholder="Enter father's name" required>
			   
			   </div>
			   </div>
			   
			   
			   <div class="input-div one col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-user"></i>
			   </div>
			   <div>
			   <h5>Mother's Name<span class="text-danger"id="errormName"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="mname"name="m_name"placeholder="Enter mother's name" required>
			   
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
			   
			   
			   <div class="input-div five col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-map-marker"></i>
			   </div>
			   <div>
			   <h5>Present Address<span class="text-danger"id="errorpreAddress"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="preaddress"name="pre_address"placeholder="Enter present address" required>
			   </div>
			   </div>
			   
                
				<div class="input-div five col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-map-marker"></i>
			   </div>
			   <div>
			   <h5>Permanent Address<span class="text-danger"id="errorperAddress"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="peraddress"name="per_address"placeholder="Enter permanent address" required>
			   </div>
			   </div>
			   

			   <div class="input-div three col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-phone"></i>
			   </div>
			   <div>
			   <h5>Phone Number<span class="text-danger"id="errorMobile"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="tel" class="input"id="mobileno"name="phone_no"value="0<?php echo $_SESSION['phone_no'];?>"readonly maxlength="11" pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}" required>
			   </div>
			   </div>
			   
			   <div class="input-div four col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-envelope"></i>
			   </div>
			   <div>
			   <h5>Email Address<span class="text-danger"id="errorEmail"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="email"class="input"id="emailid"name="email"value="<?php echo $_SESSION['email'];?>" readonly required>
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
			   
			   
			   
			    <div class="input-div eleven col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-book"></i>
			   </div>
			   <div>
			   <h5>Educational Qualification<span class="text-danger"id="errorEducation"style="font-size:12px;margin-left:15px;"></span></h5>
			   <select id="education"name="education"required>
                       <option value=""selected="selected">--Select qualification--</option>
                       <option value="graduate">Graduate</option>
                       <option value="under_graduate">Under Graduate</option>
                       <option value="post_graduate">Post Graduate</option>
                       <option value="others">Others</option> 
                 </select>
				 </div>
			   </div>
			   		
					
			    <div class="input-div four col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-vcard"></i>
			   </div>
			   <div>
			   <h5>Occupation<span class="text-danger"id="errorOccupation"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="occupation"name="occupation"placeholder="Enter Your Occupation" required>
			   </div>
			   </div>
			   
			   <div class="input-div four col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-money"></i>
			   </div>
			   <div>
			   <h5>Income<span class="text-danger"id="errorIncome"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="income"name="income"placeholder="Enter Your Income" required>
			   </div>
			   </div>
			   
			   
			     
               </div>
			   <div class="row">
			   <div class="btns col-lg-3 col-6">
			   <button class="btn-button prev-1 prev"id="secondprev">Previous</button>
			   </div>
			   <div class="btns col-lg-3 col-6">
			   <button class="btn-button next-1 next"id="secondnext">Next</button>
			   </div>
			   </div>
               </div>
			   
			   
			   <div class="page midguran"id="midgurantor">
			   <div class="titletext">
			    <h5 class="text-center text-success">Please fill Gurantor's details</h5>
			   </div><br>
			   <div class="row">
			   
			   
			    <div class="input-div four col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-vcard"></i>
			   </div>
			   <div>
			   <h5>Gurantor's Name<span class="text-danger"id="errorGurantor"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="gurantor"name="gurantor_name"placeholder="Enter Gurantor's name" required>
			   </div>
			   </div>
			   
			    <div class="input-div four col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-vcard"></i>
			   </div>
			   <div>
			   <h5>Gurantor's Occupation<span class="text-danger"id="errorGurantorO"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="goccupation"name="g_occupation"placeholder="Enter Gurantor's Occupation" required>
			   </div>
			   </div>
			   
			   <div class="input-div four col-lg-6 col-12">
			   <div class="i">
			   <i class="fa fa-money"></i>
			   </div>
			   <div>
			   <h5>Gurantor's Address<span class="text-danger"id="errorGurantoradd"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="gaddress"name="g_address"placeholder="Enter Gurantor's address" required>
			   </div>
			   </div>
			   
                <div class="ninetenone col-lg-5 col-12 ml-3 mt-3">
			   <div>
			   <h5><i class="fa fa-file-photo-o"style="color:#38d39f;"></i> Gurantor's Photo<span class="text-danger"id="errorgImage"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="file" name="g_file"id="profileImage"onchange="displayImage(this)"required>
				 </div>
			   </div>
			  
			  <div class="twentyone col-lg-5 col-12 m-auto ">
			   <div class="image-preview"id="imagePreview">
		        <img src="previewimage.png"alt="Image Preview"class="image-preview-image"id="profileDisplay"onclick="triggerClick()">
		       </div>
			   </div>
			  
			   		   
               </div>
			   
			   <div class="row">
			   <div class="btns col-lg-3 col-6">
			   <button class="btn-button prev-2 prev"id="thirdprev">Previous</button>
			   </div>
			   <div class="btns col-lg-3 col-6">
			   <button class="btn-button next-2 next"id="thirdnext">Next</button>
			   </div>
			   </div>
			   </div>
			   
			   
			   
			   <div class="page bottom" id="bottompart">
			   <div class="titletext">
			    <h5 class="text-center text-success">Please fill Bank Loan details</h5>
			   </div><br>
			   
			   <div class="row">
			   
			   
			   
			   <div class="input-div sixten col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-keyboard-o"></i>
			   </div>
			   <div>
			   <h5>Account Number<span class="text-danger"id="errorAccountno"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="accountno"name="account_no"value="<?php echo $_SESSION['account_no'];?>"required readonly>
			   </div>
			   </div>
			   
			   
			   <div class="input-div eighten col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-rocket"></i>
			   </div>
			   <div>
			   <h5>Loan Type<span class="text-danger"id="errorLoan"style="font-size:12px;margin-left:15px;"></span></h5>
			   <select id="loan"name="loan_type"class="form-control">
                      
                       <option value=""selected="selected">--Select Loan Type--</option>
                       <option value="personal loan">Personal Loan</option>
                       <option value="doctors loan">Doctors Loan</option>
                       <option value="landlord loan">Landlord Loan</option>
                       <option value="business loan">Business Loan</option>
                       <option value="govt employee loan">Govt Employee Loan</option>
                       <option value="teacher loan">Teacher Loan</option>
                       <option value="loan against tdr">Loan Against TDR</option>
                       <option value="home loan">Home Loan</option>
                       <option value="loan against property">Loan Against Property</option>
                       <option value="flexi home loan">Flexi Home Loan</option>
                       <option value="swapno">Swapno</option>
                       <option value="apon thikana">Apon Thikana</option>
                       <option value="auto loan">Auto Loan</option>
                         </select>
				 </div>
			   </div>
			   
			   
			   <div class="input-div sixten col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-keyboard-o"></i>
			   </div>
			   <div>
			   <h5>Loan Term<span class="text-danger"id="errorTerm"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="term"name="term" placeholder="Enter loan amount"required>
			   </div>
			   </div>
			   
			   <div class="input-div sixten col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-keyboard-o"></i>
			   </div>
			   <div>
			   <h5>Loan Amount<span class="text-danger"id="errorAmount"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="amount"name="amount" placeholder="Enter loan amount"required>
			   </div>
			   </div>
			   
			   
			  
			  <div class="ninetenone col-lg-5 col-12 ml-3 mt-3">
			   <div>
			   <h5><i class="fa fa-file-photo-o"style="color:#38d39f;"></i> Applicant's Photo<span class="text-danger"id="errorappImage"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="file" name="appli_file"id="profileappImage"onchange="displayappImage(this)"required>
				 </div>
			   </div>
			  
			   <div class="twentyone col-lg-5 col-12 m-auto">
			   <div class="image-preview"id="imagePreview">
		        <img src="previewimage.png"alt="Image Preview"class="image-preview-image"id="profileappDisplay"onclick="triggerappClick()">
		       </div>
			   </div>
			  
			  
			   <div class="ninetenone col-lg-5 col-12 ml-3 mt-3">
			   <div>
			   <h5><i class="fa fa-file-photo-o"style="color:#38d39f;"></i> Electricity/Gas bill Copy<span class="text-danger"id="errorbillImage"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="file" name="bill_file"id="profilebillImage"onchange="displaybillImage(this)"required>
				</div>
			   </div>
                
			  <div class="twentytwo col-lg-12 col-12 m-auto ">
			   <div class="image-preview"id="imagePreview">
		        <img src="previewimage.png"alt="Image Preview"class="image-preview-image"id="profilebillDisplay"onclick="triggerbillClick()">
		       </div>
			   </div>
			  
			  
			  <div class="col-lg-12 col-12 m-auto ">
			  <div class="checkboxed">
		       <h6 ><input type="checkbox" id="checkboxcheck" required>
			   <span class="roles">I agree with all terms,roles & regulations.</span>
			   </h6>
			  </div>
			   </div>
			  
			  
			   </div>
			   
			   <div class="row mt-3">
			   <div class="btns col-lg-3 col-6">
			   <button class="btn-button prev-3 prev"id="fourthprev">Previous</button>
			   </div>
			   <div class="btns col-lg-3 col-6">
			  <input type="submit" name="submit" value="Apply loan"class="btn-button submitbtn">
			    </div>
			   </div>
			   
			   </div>
			   
			   
			   </form>
			  </div>

						 
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
				
				<!-- LOAN PART START -->
				
				
				$(document).ready(function(){
				  $('#datepicker').datepicker({
					  dateFormat: "dd-mm-yy",
					  changeMonth:true,
					  changeYear:true
				  });
			  })
				 </script>
				
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
		            $("#errorfName").html('');
		            $("#errormName").html('');
					$("#errorDob").html('');
					$("#errorpreAddress").html('');
					$("#errorperAddress").html('');
					$("#errorMobile").html('');
					$("#errorEmail").html('');
					
					
					 if($("#name").val()==''){
						 $("#errorName").html('*is required');
						 return false;
					 }
					 
					 else if($("#fname").val()==''){
						 $("#errorfName").html('*is required');
						 return false;
					 }
					  else if($("#mname").val()==''){
						 $("#errormName").html('*is required');
						 return false;
					 }
					 
					 else if($("#datepicker").val()==''){
						 $("#errorDob").html('*is required');
						 return false;
					 }
					 
					  else if($("#preaddress").val()==''){
						 $("#errorpreAddress").html('*is required');
						 return false;
					 } 
					 
					 else if($("#peraddress").val()==''){
						 $("#errorperAddress").html('*is required');
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
					$("#errorEducation").html('');
					$("#errorOccupation").html('');
					$("#errorIncome").html('');
					  
					  if($("#gender").val()==''){
						 $("#errorGender").html('*is required');
						 return false;
					 }
					  
					  else if($("#married").val()==''){
						 $("#errorMarried").html('*is required');
						 return false;
					 }
										 
					   else if($("#education").val()==''){
						 $("#errorEducation").html('*is required');
						 return false;
					 }
					  
					  else if($("#occupation").val()==''){
						 $("#errorOccupation").html('*is required');
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
		             $("#midgurantor").show();
		             $("#midpart").hide();
					  }
	                   });
					   });

					   $(document).ready(function(){
	              $("#thirdnext").click(function(e){
					   e.preventDefault();
		            $("#errorGurantor").html('');
					$("#errorGurantorO").html('');
					$("#errorGurantoradd").html('');
					$("#errorgImage").html('');
									  
					  if($("#gurantor").val()==''){
						 $("#errorGurantor").html('*is required');
						 return false;
					 }
					  
					  else if($("#goccupation").val()==''){
						 $("#errorGurantorO").html('*is required');
						 return false;
					 }
										 
					   else if($("#gaddress").val()==''){
						 $("#errorGurantoradd").html('*is required');
						 return false;
					 }
					  
					  else if($("#profileImage").val()==''){
						 $("#errorImage").html('*is required');
						 return false;
					 }
					  
					  else{
		             $("#bottompart").show();
		             $("#midgurantor").hide();
					  }
	                   });
					   });
					   
				 $(document).ready(function(){
	              $("#secondprev").click(function(){
		             $("#toppart").show();
		             $("#midpart").hide();
	                   });
					   });
					   
					   $(document).ready(function(){
	              $("#thirdprev").click(function(){
		             $("#midpart").show();
		             $("#midgurantor").hide();
	                   });
					   }); 
					   
					   $(document).ready(function(){
	              $("#fourthprev").click(function(){
		             $("#midgurantor").show();
		             $("#bottompart").hide();
	                   });
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

	  
     	  function triggerappClick(){
		document.querySelector('#profileappImage').click();
		
	}
	function displayappImage(e){
		if(e.files[0]){
			var reader = new FileReader();
			
			reader.onload = function(e){
				document.querySelector('#profileappDisplay').setAttribute('src',e.target.result);
			}
			reader.readAsDataURL(e.files[0]);
		}
		
	}

		
		function triggerbillClick(){
		document.querySelector('#profilebillImage').click();
		
	}
	function displaybillImage(e){
		if(e.files[0]){
			var reader = new FileReader();
			
			reader.onload = function(e){
				document.querySelector('#profilebillDisplay').setAttribute('src',e.target.result);
			}
			reader.readAsDataURL(e.files[0]);
		}
		
	}

				  
				</script>
			  </body>
			</html>