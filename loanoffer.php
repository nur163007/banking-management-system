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
	
	$accountno ="0";
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
 
		 $loaninsert ="insert into loan (customer_name,f_name,m_name,date_of_birth,pre_address,per_address,phone_no,email,gender,maritial_status,education,occupation,income,gurantor_name,g_occupation,g_address,g_file,account_no,loan_type,term,amount,appli_file,bill_file,status) 
		 VALUES('$name','$fname','$mname','$dateofbirth','$preaddress','$peraddress','$phoneno','$email','$gender','$maritial_status','$education','$occupation','$income','$gname','$goccupation','$gaddress','$filename','$accountno','$loantype','$term','$amount','$fileapp','$filebill','$status')";
         $loanresult =mysqli_query($conn,$loaninsert);
		 if($loanresult == true){
				
                echo '<script>alert ("Succesfully submit your Information")</script>'; 				
				echo '<script>window.location="loanoffer.php"</script>';
			  }

else{
	 echo '<script>alert ("Something wrong")</script>'; 				
				
}
}


?>

<html lang="en">
<head>   
   <meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link rel="shortcut icon" href="card.jpg"/>
                
				<!-- Bootstrap CSS -->
				<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|PT+Sans:400,700&display=swap" rel="stylesheet">
				<link rel="stylesheet" href="bootstrap.min.css">
				<link rel="stylesheet" href="jquery-ui.min.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
				<script src="jquery-3.5.1.min.js"></script>
				
				
				<link rel="stylesheet" href="style2.css">
				
				
				<title>BMS</title>
</head>
<body> 
<section class="one">
	<!--header1 part start-->
<div class="header1 bg-dark">
  <div class="row">
    <div class="col-lg-6 col-sm-3 col-12 m-auto d-block topheaderpart">
	<div class="row">
    <div class=" col-lg-10 offset-lg-1">
      <div class="navbar nav"style="padding:10px 30px;">	  
 <a class="active" href="index.php#map"><i class="fa fa-map-marker"></i> Branch & ATMs </a>  
 <a href="emi.html"><i class="fa fa-calculator"></i> EMI Calculator</a> 
  <a href="rm1.html"><i class="fa fa-user-circle"></i> Agent Banking</a>
 
    </div>
    </div>
    </div>
	</div>
	
    <div class="col-lg-4 col-sm-12 col-12 d-block m-auto">
    <div class="navbar bg-info navtop"style="padding:12px 48px;">
      <a href="openaccount.php"><i class="fa fa-address-book"></i> Account opening </a> 
      <a href="loginres.php"><i class="fa fa-user-circle-o"></i> Admin</a>
      <a href="customerlogin.php"><i class="fa fa-users"></i> Customer</a>
    </div>
    </div>
     <div class="col-lg-1 col-md-4 col-sm-10 d-none d-lg-block m-auto">
    
	
    </div>
  </div>
</div>
<!--header1 part End-->


<!--header2 part start-->
<div class="header2">

<div class="container mt-2">
<div class="row">
   <div class="col-lg-3 col-10">
  <img src="logo.png" width="100%" height="80px">
  </div>
  <div class="col-2 d-lg-none mt-3">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fa fa-reorder" style="font-size:33px;"></i></span>
  </button>
</div>
    <div class="col-lg-3 col-md-4 col-sm-10 col-7 d-block mr-auto mt-3 topnavbar">
	<div class="row">
    <div class=" col-lg-2 col-3 mr-auto mt-3">
       <i class="fa fa-envelope text-dark" style="font-size:32px;"></i> 
	  </div>
	  <div class="navbar col-lg-10 col-9 ml-auto">
   <p class="text-dark">Send Us Message <br><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new" target="_blank"class="text-success">infofmdbms@gmail.com</a></p>
    </div>
    
    </div>
    </div>
	
	
	<div class="col-lg-3 col-md-4 col-sm-10 col-5 d-block mr-auto mt-3">
	<div class="row">
    <div class=" col-lg-2 col-3 ml-auto mt-3">
       <i class="fa fa-phone text-dark" style="font-size:32px;"></i> 
	  </div>
       <div class="navbar col-lg-10 col-9 ml-auto">
   <p class="text-dark">	
	<a href="tel:16243"class="text-success">16243(local)</a><br><a href="tel:01609072754"class="text-success">+015448487858</a></p>

    </div>
    </div>
    </div>

    <div class="col-lg-3 col-md-4 col-sm-10 d-none d-lg-block">
	<img src="virus.gif" alt="not found"style="height:90px;width:160px;">
    </div>
</div>
</div>


</div>
<!--header2  End-->
</section>
<!--section one End-->

<section class ="two">
<!--sction two  start-->
<nav class="navbar navbar-expand-lg bg-success navbar-dark justify-content-center">
 <!--navbar  start-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav m-auto">
    <li class="nav-item active">
      <a class="nav-link active" href="index.php"><i class="fa  fa-bank"></i> Home</a>
    </li>
	
    <li class="nav-item">
	<div class="dropdown">
      <a class="nav-link active" href="#"><i class="fa fa-money text-white"></i> Retail</a>
	   <div class="dropdown-content bg-success">
	    <a class="dropdown-item" href="deposit_products.html"><i class="fa fa-database text-white"></i> Deposit products</a>
	    <a class="dropdown-item" href="loan1.html"><i class="fa fa-database text-white"></i> Loan products</a>
	    <a class="dropdown-item" href="student.html"><i class="fa fa-database text-white"></i> Student Banking</a>
	    <a class="dropdown-item" href="others.html"><i class="fa fa-database text-white"></i> Others</a>
     </div>
	  </div>
	 
    </li>
	 
   <li class="nav-item">
   <div class="dropdown">
      <a class="nav-link active" href="#"><i class="fa fa-usd text-white"></i> wholesale</a>
	   <div class="dropdown-content bg-success">
	   <a class="dropdown-item" href="term_finance.html"><i class="fa fa-usd text-white"></i> Term Finance</a>
	   <a class="dropdown-item" href="capital.html"><i class="fa fa-usd text-white"></i> Working capital Finance </a>
	   <a class="dropdown-item" href="trade.html"><i class="fa fa-usd text-white"></i> Trade Finance </a>
	   <a class="dropdown-item" href="off-shor.html"><i class="fa fa-usd text-white"></i> Off-Shore Banking</a>
	   <a class="dropdown-item" href="sn.html"><i class="fa fa-usd text-white"></i> Syndications & structured</a>
	   <a class="dropdown-item" href="cash_mange.html"><i class="fa fa-usd text-white"></i> BMS cash Managenment</a>

  </div>
	  </div>
	 
    </li>
    <li class="nav-item">
	 <div class="dropdown">
      <a class="nav-link active" href="#"><i class="fa fa-cubes text-white"></i> SME</a>
	   <div class="dropdown-content bg-success">
	   <a class="dropdown-item" href="SME.html"><i class="fa fa-hdd-o text-white"></i> SME Products</a>
	   <a class="dropdown-item" href="women.html"><i class="fa fa-hdd-o text-white"></i> Women enterprenure</a>
	   <a class="dropdown-item" href="agri.html"><i class="fa fa-hdd-o text-white"></i> Agri Finance </a>
	   <a class="dropdown-item" href="green.html"><i class="fa fa-hdd-o text-white"></i> Green energy Finance</a>
	   <a class="dropdown-item" href="client.html"><i class="fa fa-hdd-o text-white"></i> Clients stories</a>
      
	  </div>
	  </div>
    </li>
	<li class="nav-item">
	 <div class="dropdown">
      <a class="nav-link active" href="#"><i class="fa fa-edit text-white"></i> NRB</a>
	     <div class="dropdown-content bg-success">
		 <a class="dropdown-item" href="nrb.html"><i class="fa fa-user-circle text-white"></i> NRB Saving A/C</a>
		 <a class="dropdown-item" href="dpd.html"><i class="fa fa-user-circle text-white"></i> NRB DPS A/C</a>
		 <a class="dropdown-item" href="fdr.html"><i class="fa fa-user-circle text-white"></i> NRB FDR</a>
  
  </div>
	  </div>
    </li>
	<li class="nav-item">
      
	  	 <div class="dropdown">
      <a class="nav-link active" href="#"><i class="fa fa-diamond text-white"></i> Treasury</a>
	   <div class="dropdown-content bg-success">
	   <a class="dropdown-item" href="market.html"><i class="fa fa-gift text-white"></i> Money Market</a>
	   <a class="dropdown-item" href="dibor.html"><i class="fa fa-gift text-white"></i> DIBOR</a>
	   <a class="dropdown-item" href="foren.html"><i class="fa fa-gift text-white"></i> Foreign Exchange</a>
	   <a class="dropdown-item" href="pr.html"><i class="fa fa-gift text-white"></i> Primary Dealers</a>
 
  </div>
	  </div>
    </li>
	<li class="nav-item">
    
	  
	  	 <div class="dropdown">
      <a class="nav-link active" href="#"><i class="fa fa-universal-access text-white"></i> priviledge Bakning</a>
	   <div class="dropdown-content bg-success">
	   <a class="dropdown-item" href="priv.html"><i class="fa fa-shopping-bag text-white"></i> Benifits & Service</a>
	   <a class="dropdown-item" href="member.html"><i class="fa fa-user-circle text-white"></i> Becoming a Member</a>
	   <a class="dropdown-item" href="partners.html"><i class="fa fa-users text-white"></i> priviledge Partners</a>
	   <a class="dropdown-item" href="faq.html"><i class="fa fa-question-circle text-white"></i> priviledge FAQ</a>
 
  </div>
	  </div>
    </li>
	<li class="nav-item">
 
	  	 <div class="dropdown">
      <a class="nav-link active" href="#"><i class="fa fa-credit-card-alt text-white"></i> Cards</a>
	   <div class="dropdown-content bg-success">
	    <a class="dropdown-item" href="card.html"><i class="fa fa-cc-mastercard text-white"></i> Debit Cards</a>
	    <a class="dropdown-item" href="card1.html"><i class="fa fa-cc-visa text-white"></i> Credit Cards</a>
	    <a class="dropdown-item" href="prepaid.html"><i class="fa fa-cc-amex text-white"></i> prepaid Card</a>
	    
   </div>
	  </div>
    </li>
	<li class="nav-item active">
      <a class="nav-link" href="rm2.html"><i class="fa fa-send text-white"></i> Air Lounge</a>
    </li>
	<li class="nav-item active">
      <a class="nav-link" href="career.html"><i class="fa fa-handshake-o text-white"></i> Career</a>
    </li>
	<li class="nav-item active">
      <a class="nav-link" href="about us.html"><i class="fa fa-address-card text-white"></i> About us</a>
    </li>
  </ul>
  </div>
</nav>
<!--navbar End-->
</section>
<!--sction two  End-->

<section class="three bg-info">
<!--sction three  start-->
<div class="bg1">
<img src="Web-banner-v2-04.jpg" width="100%" height="250px">
</div>
</section>
<br>
<!--sction three  End-->

 <section class="six">
<div class="container cont ">
  <div class="row">
    <div class="col-sm-3 col-lg-4 position-relative">
	<p>Please Share:</p>
	<div class="social-media">
			  <a href="#"class="social-icon fb"><i class="fa fa-facebook-f"></i></a>
			  <a href="#"class="social-icon whatsapp"><i class="fa fa-whatsapp"></i></a>
			  <a href="#"class="social-icon google"><i class="fa fa-google"></i></a>
			  <a href="#"class="social-icon insta"><i class="fa fa-linkedin"></i></a>
			  </div>
			  

<ul class="nav nav-tabs rates-details-list"> 
<li class="active"><a href="loanoffer.php#personalloan" id="clickpersonal" class="text-dark"><button type="button" class=" btn-outline-secondary btn-lg  login"><span class="float-left ">Personal Loan(Freedom of Life)</span>&nbsp <span class="float-right"><i class="fa fa-angle-right"></i></span></button> </a></li>
<li><a href="loanoffer.php#doctorloan" id="clickdoctor"  class="text-dark"><button type="button" class=" btn-outline-secondary btn-lg  login"><span class="float-left ">Doctors Loan</span>&nbsp <span class="float-right"><i class="fa fa-angle-right"></i></span></button> </a></li>
<li><a href="loanoffer.php#landloan" id="clickland"class="text-dark"><button type="button" class=" btn-outline-secondary btn-lg  login"><span class="float-left ">Personal Loan For landlord</span>&nbsp <span class="float-right"><i class="fa fa-angle-right"></i></span></button> </a></li>
<li><a href="loanoffer.php#businessloan" id="clickbusiness" class="text-dark"><button type="button" class=" btn-outline-secondary btn-lg  login"><span class="float-left ">Personal Loan For Businessman</span>&nbsp <span class="float-right"><i class="fa fa-angle-right"></i></span></button> </a></li>
<li><a href="loanoffer.php#govtloan" id="clickgovt"class="text-dark"><button type="button" class=" btn-outline-secondary btn-lg  login"><span class="float-left ">Personal Loan For Govt. Employee</span>&nbsp <span class="float-right"><i class="fa fa-angle-right"></i></span></button> </a></li>
<li><a href="loanoffer.php#teacherloan" id="clickteacher"class="text-dark"><button type="button" class=" btn-outline-secondary btn-lg  login"><span class="float-left ">Personal Loan For Teacher</span>&nbsp <span class="float-right"><i class="fa fa-angle-right"></i></span></button> </a></li>
<li><a href="loanoffer.php#tdrloan" id="clicktdr" class="text-dark"><button type="button" class=" btn-outline-secondary btn-lg  login"><span class="float-left ">Loan Against TDR</span>&nbsp <span class="float-right"><i class="fa fa-angle-right"></i></span></button> </a></li>
<li><a href="loanoffer.php#homeloan" id="clickhome" class="text-dark"><button type="button" class=" btn-outline-secondary btn-lg  login"><span class="float-left ">Home Loan</span>&nbsp <span class="float-right"><i class="fa fa-angle-right"></i></span></button> </a></li>
<li><a href="loanoffer.php#propertyloan" id="clickproperty" class="text-dark"><button type="button" class=" btn-outline-secondary btn-lg  login"><span class="float-left ">Loan Against Property</span>&nbsp <span class="float-right"><i class="fa fa-angle-right"></i></span></button> </a></li>
<li><a href="loanoffer.php#flexiloan" id="clickflexi"class="text-dark"><button type="button" class=" btn-outline-secondary btn-lg  login"><span class="float-left ">Flexi Home Loan</span>&nbsp <span class="float-right"><i class="fa fa-angle-right"></i></span></button> </a></li>
<li><a href="loanoffer.php#swapnoloan" id="clickswapno" class="text-dark"><button type="button" class=" btn-outline-secondary btn-lg  login"><span class="float-left ">Swapno</span>&nbsp <span class="float-right"><i class="fa fa-angle-right"></i></span></button> </a></li>
<li><a href="loanoffer.php#thikanaloan" id="clickthikana" class="text-dark"><button type="button" class=" btn-outline-secondary btn-lg  login"><span class="float-left ">Affordable Housing (AH)Apon Thikana</span>&nbsp <span class="float-right"><i class="fa fa-angle-right"></i></span></button> </a></li>
<li><a href="loanoffer.php#autoloan" id="clickauto" class="text-dark"><button type="button" class=" btn-outline-secondary btn-lg  login"><span class="float-left ">Auto Loan</span>&nbsp <span class="float-right"><i class="fa fa-angle-right"></i></span></button> </a></li>
</ul>

<br><br>
  <video width="400" controls>
  <source src="promo-video.mp4" type="video/mp4">
 
</video>

  

    
	</div>
	<br>
	
	
	
    <div class="col-sm-8 col-lg-8 tab-content">
	
	           
			  <div class="login-container" id="login_container">
			  
			   <form action=""method="post" enctype="multipart/form-data">
			   <div class="page top slidepage" id="toppart">
			   <div class="titletext">
			   <a href="#" id="crossprofile"style="padding:0 10px;font-size:25px;"><i class="fa fa-times-circle text-danger"></i></a>
			    <h5 class="text-center text-success ">Please fill your personal details</h5>
			   </div> 
			   <div class="row">
			   <div class="input-div one col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-user"></i>
			   </div>
			   <div>
			   <h5>Customer Name<span class="text-danger"id="errorName"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="name"name="customer_name" placeholder="Enter Your Name"required>
			   
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
			   
			   
			   <div class="input-div  col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-map-marker"></i>
			   </div>
			   <div>
			   <h5>Present Address<span class="text-danger"id="errorpreAddress"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="preaddress"name="pre_address"placeholder="Enter present address" required>
			   </div>
			   </div>
			   
                
				<div class="input-div col-lg-5 col-12">
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
			   <input type="tel" class="input"id="mobileno"name="phone_no"placeholder="Enter your phone no" maxlength="11" pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}" required>
			   </div>
			   </div>
			   
			   <div class="input-div four col-lg-5 col-12">
			   <div class="i">
			   <i class="fa fa-envelope"></i>
			   </div>
			   <div>
			   <h5>Email Address<span class="text-danger"id="errorEmail"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="email"class="input"id="emailid"name="email"placeholder="Enter Your Email" required>
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
			   
			   <div class="input-div sixten col-lg-6 col-12">
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
			   
			   </div>
			  
			  <div class="row mt-3">
			   <div class="btns col-lg-3 col-6">
			   <button class="btn-button prev-3 prev"id="fourthprev">Previous</button>
			   </div>
			   <div class="btns col-lg-3 col-6">
			   <button class="btn-button next-2 next"id="fourthnext">Next</button>
			   </div>
			   </div>
			   
			    </div>
			  
			  <div class="page bottom" id="bottompart2">
			   <div class="titletext">
			    <h5 class="text-center text-success">Please fill Bank Loan details</h5>
			   </div><br>
			   
			   <div class="row">
			  
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
			   <button class="btn-button prev-3 prev"id="fifthprev">Previous</button>
			   </div>
			   <div class="btns col-lg-3 col-6">
			  <input type="submit" name="submit" value="Apply loan"class="btn-button submitbtn">
			    </div>
			   </div>
			   
			   </div>
			   
			   
			   </form>
			  </div>
			  
      <h1> <small>Loan Products</small></h1>
      
      <p class="text success"><a href="index.php"class="text-success">Home</a><span class="text-success"> &nbsp <i class="fa fa-angle-right" style="font-size:15px color:red"></i>&nbsp <a href="loan1.html#loan" class="text-success">Retail</a>&nbsp <i class="fa fa-angle-right" style="font-size:15px color:red"></i>&nbsp Loan Offers</span></p>
     
      <p class="text-justify  text-secondary">Whatever credit facility you are looking for, you will surely find it at BMS. 
	  We have a comprehensive selection of facilities to offer, from a simple personal loan, credit cards, auto loan and 
	  overdraft facilities to home loan.

       We strive to remain competitive and are committed to constantly reviewing both our lending policies and rates to 
	   ensure that our customers get the best deals in town.
      <br>
	  
	   
	                       <!--PERSONAL LOAN OPTION START-->
	  
	  <section class="seven active" id="personalloan">
	  <div class="row">
	<div class="col-lg-4 col-md-4 col-12">
	<h3 class="text-danger">Personal Loan(Freedom of Life)</h3>
	<h5 class="text-success">Product Summary</h5>
	 <p style="text-align:justify;">We all need a helping hand to be able to live our life to the fullest. And in this regard, we believe that we can be the right partner for you, by providing suitable Personal Loan products that will help you meet your needs so that you never have to compromise with all what life has to offer!!!</p>
     <h5 class=" text-success">The Eligibility</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	             <li style="list-style-type:circle!important;margin-left:15px;"> Age between 25 years to 65 years</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum monthly Income of BDT 25,000</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Residence of Dhaka, Chattogram, Sylhet, Cumilla, Jashore, Narsingdi, Bogura, Barishal or nearby area</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum one year of Bank A/C relationship with any scheduled bank of Bangladesh</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Having 1 year professional experience for salaried employee & 3 years for contractual employee</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Joint application can be possible</li>
                 
	 </ul>
	 </div>
     <div class="col-lg-4 col-md-4 col-12">
	 <ul class=" text-dark"style="text-align:justify;">
	  <li style="list-style-type:circle!important;margin-left:15px;">Permanent employees of Multinational organizations, Banks, FI's, UN bodies, Government and Semi Government Organizations, Reputed Bangla & English Medium School, College & University, Locally established Large Companies, Professionals, Landlord/Landlady.</li>
       </ul>      
	 <h5 class=" text-success">The Securities</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Postdated Cheques & two personal guarantee (One from family member & one from colleague/Doctor/<br>Landlord/Banker/Govt employee/professionals)</li>
        </ul>

		<h5 class=" text-success">Our Personal Loan</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest loan ceiling in the market, BDT 25 Lac</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest Loan tenure up to 60 months</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Top Up Loan facility</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Partial Disbursement Option</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Partial prepayment option</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Life Insurance Coverage</li>
        </ul> 
		
		
		<h5 class=" text-success">Required Documents</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Application Form duly filled up and signed</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Recent Studio Photographs of Applicant & guarantor(s)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Valid NID of Applicant and Guarantor(s) (National ID/Passport/Driving License)</li>
	 </ul>
		</div>
		
		<div class="col-lg-4 col-md-4 col-12">
		<ul class=" text-dark"style="text-align:justify;">
		 <li style="list-style-type:circle!important;margin-left:15px;">TIN Certificate along with IT10-B (if required)</li>
	    <li style="list-style-type:circle!important;margin-left:15px;">Bank statement of last 12 (Twelve) months</li>
	    <li style="list-style-type:circle!important;margin-left:15px;">Copy of bill – Electricity / WASA / GAS/ Land Phone (If applicable)</li>
       
	    </ul> 
		<h5 class=" text-success">Additional Documents Required for</h5>
		<h6 class=" text-danger">Salaried Person:</h6>
		<ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Salary Certificate (in the form of Letter of Introduction)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Pay Slip/Debit Voucher</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Asset-Liability Statement</li>
	</ul>
	
	<h6 class=" text-danger">Businessman/ Self-employed Professionals:</h6>
		
		<ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Trade License</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Income Statement</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Professional certificate</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Asset-Liability Statement</li>
	</ul>
	
	<h5 class=" text-success">Made of Payment</h5>
		
		<ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Equal monthly installment basis up to 60 months</li>
	</ul>
	
	<div class="row">
	<div class="col-lg-12 text-center mt-4">
	 <a href="#" id="personalapply"class="apply">Apply Now</a>
	</div>
	</div>
    </div>
    </div>

    
</section>
	  
	                  <!--DOCTORS LOAN OPTION START-->
	  
	  
	  <section class="seven " id="doctorloan">
	  <div class="row">
	<div class="col-lg-4 col-md-4 col-12">
	<h3 class="text-danger">Doctors Loan</h3>
	<h5 class="text-success">Product Summary</h5>
	 <p style="text-align:justify;">Doctors are always with us in our crucial time to make our life healthier with their support.
We believe that we can be your right partner by providing you our Doctors loan products that will help
You meet your needs so that you never have to compromise with all that life has to offer.</p>
	 <h5 class=" text-success">The Eligibility</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	             <li style="list-style-type:circle!important;margin-left:15px;"> Age between 24 years to 70 years at the time of maturity of loan</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum monthly Income of BDT 25,000</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Residence of Dhaka, Chattogram, Shylet, Khulna, Rajshahi, Mymensingh, Cumilla Division and nearby area</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum one year Bank A/C relationship with any scheduled bank in Bangladesh</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Having length of professional doctor's practice 1 year for Govt. Doctors; 3 years for Private Doctors</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Joint apply can be possible</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">All registered MBBS Doctor.</li>
                 
	 </ul>
	 </div>
<div class="col-lg-4 col-md-4 col-12">
	 <h5 class=" text-success">The Securities</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Postdated Cheques & two personal guarantee (One from family member & one from colleague/Doctor/<br>Landlord/Banker/Govt employee/professionals)</li>
        </ul>

		<h5 class=" text-success">We Offer</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest loan ceiling in the market, BDT 25 Lac</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest Loan tenure up to 60 months</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Top Up Loan facility</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Competitive Interest rates</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Approval within shortest possible time</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Partial prepayment option</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">No Hidden cost</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Life Insurance Coverage</li>
        </ul> 
		
		
		<h5 class=" text-success">Required Documents</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Application Form duly filled up and signed</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Recent Studio Photographs of Applicant & guarantor(s)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Valid NID of Applicant and Guarantor(s) (National ID/Passport/Driving License)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">E-TIN Copy</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Bank statement of last 12 (Twelve) months</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Copy of bill – Electricity / WASA / GAS/ Land Phone (If applicable)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">MBBS & BMDC certificate</li>
        </ul>
		</div>
		
		<div class="col-lg-4 col-md-4 col-12">
		<h5 class=" text-success">Additional Documents Required for</h5>
		<h6 class=" text-danger">Salaried Person:</h6>
		<ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Salary Certificate (in the form of Letter of Introduction)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Pay Slip/Debit Voucher</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Asset-Liability Statement</li>
	</ul>
	
	<h6 class=" text-danger">Businessman/ Self-employed Professionals:</h6>
		
		<ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Trade License</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Income Statement</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Professional certificate</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Asset-Liability Statement</li>
	</ul>
	
	<h5 class=" text-success">Made of Payment</h5>
		
		<ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Equal monthly installment basis up to 60 months</li>
	</ul>
	
	<div class="row">
	<div class="col-lg-12 text-center mt-4">
	 <a href="#"id="doctorapply"class="apply">Apply Now</a>
	</div>
	</div>
    </div>
    </div>
	
</section>



                                             <!--LANDLORD LOAN OPTION START-->
	  
	  
	  <section class="seven " id="landloan">
	  <div class="row">
	<div class="col-lg-4 col-md-4 col-12">
	<h3 class="text-danger">Personal Loan For Landlady/Landlord</h3>
	<h5 class="text-success">Product Summary</h5>
	 <p style="text-align:justify;">We specially designed this loan product made for you to facilitate a smooth transition 
	 in life. We believe that we can be your right partner by providing you a Loan that will help you to make the best out 
	 of your property and optimize your earnings.</p>
	 <h5 class=" text-success">The Eligibility</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	             <li style="list-style-type:circle!important;margin-left:15px;"> Age 25-65 (25-70 with co-borrower) at the time of maturity of loan</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum monthly Income of BDT 50,000</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Residence of Dhaka, Chattogram, Shylet, Khulna, Rajshahi, Mymensingh, Cumilla Division and nearby area</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum one year Bank A/C relationship with any scheduled bank in Bangladesh</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Having constant source of rental income</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Joint apply can be possible</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Only Landlord or Landlady who have constant source of rental income. Here rental income will be considered as only source</li>
                 
	 </ul>
	 </div>
<div class="col-lg-4 col-md-4 col-12">
	 <h5 class=" text-success">The Securities</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Postdated Cheques & two personal guarantee (One from family member & one from colleague/Doctor/<br>Landlord/Banker/Govt employee/professionals)</li>
        </ul>

		<h5 class=" text-success">We Offer</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest loan ceiling of BDT 25 Lac in the market</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest Loan tenure up to 60 months</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Top Up Loan facility</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Competitive Interest rates</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Approval within shortest possible time</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Partial prepayment option</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">No Hidden cost</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Life Insurance Coverage</li>
        </ul> 
		
		
		<h5 class=" text-success">Required Documents</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Application Form duly filled up and signed</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Recent Studio Photographs of Applicant & guarantor(s)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Valid NID of Applicant and Guarantor(s) (National ID/Passport/Driving License)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">E-TIN Copy</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Bank statement of last 12 (Twelve) months</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Copy of bill – Electricity / WASA / GAS/ Land Phone (If applicable)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Title Deed copy</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Rental Income Proof</li>
        </ul>
		</div>
		
		<div class="col-lg-4 col-md-4 col-12">
	
	<h5 class=" text-success">Made of Payment</h5>
		
		<ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Equal monthly installment basis up to 60 months</li>
	</ul>
	
	<div class="row">
	<div class="col-lg-12 text-center mt-4">
	 <a href="#" id="landlordapply"class="apply">Apply Now</a>
	</div>
	</div>
    </div>
    </div>
</section>




                                      <!--BUSINESS LOAN OPTION START-->
	  
	  
	  <section class="seven " id="businessloan">
	  <div class="row">
	<div class="col-lg-4 col-md-4 col-12">
	<h3 class="text-danger">Personal Loan for Businessman (BONIK)</h3>
	<h5 class="text-success">Product Summary</h5>
	 <p style="text-align:justify;">Personal Loan for Business person is a term loan facility, which helps to meet the 
	 immediate personal exigencies for any purpose. So, a person never has to compromise with all that life has to offer!</p>
	 <h5 class=" text-success">The Eligibility</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	             <li style="list-style-type:circle!important;margin-left:15px;"> Age between 30 years to 65 years at the time of maturity of loan.</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum monthly Income of BDT 50,000</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum twelve (12) months Bank A/C relationship with any scheduled bank in Bangladesh (company statement)</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Having Trade License with renew of last 2 years issued by respective City Corporation.</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">The business person with sound track record & own house in city corporation area.</li>
                 
	 </ul>
	 </div>
<div class="col-lg-4 col-md-4 col-12">
	 <h5 class=" text-success">The Securities</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Postdated cheques, Total receivable cheque & Personal Guarantee (s)</li>
        </ul>

		<h5 class=" text-success">We Offer</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest loan ceiling of BDT 25 Lac in the market</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest Loan tenure up to 60 months</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Top Up Loan facility</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Joint apply can be possible</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan A/C statement or Tax certificate also free of cost</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Partial prepayment or early settlement option</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">No Hidden cost</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Insurance Coverage</li>
        </ul> 
		
		
		<h5 class=" text-success">Required Documents</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Application Form duly filled up and signed</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Recent Studio Photographs of Applicant & guarantor(s)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Valid NID of Applicant and Guarantor(s) (National ID/Passport/Driving License)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">E-TIN Copy</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Bank statement of last 12 (Twelve) months</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Copy of bill – Electricity / WASA / GAS/ Land Phone (If applicable)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Copy of latest Trade License with renew of last 2 years issued by respective City Corporation.</li>
	 </ul>
		</div>
		
		<div class="col-lg-4 col-md-4 col-12">
		<ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Certificate of Incorporation (if applicable)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Memorandum & Article of Association (if applicable)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Form XII, Schedule X (if applicable)</li>
        </ul>
	<h5 class=" text-success">Made of Payment</h5>
		
		<ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Equal monthly installment basis up to 60 months through postdated cheques (PDC) or Direct Debit Instructions (DDI)</li>
	</ul>
	
	<div class="row">
	<div class="col-lg-12 text-center mt-4">
	 <a href="#" id="businessapply"class="apply">Apply Now</a>
	</div>
	</div>
    </div>
    </div>
</section>



                                       <!--GOVT Employee LOAN OPTION START-->
	  
	  
	  <section class="seven " id="govtloan">
	  <div class="row">
	<div class="col-lg-4 col-md-4 col-12">
	<h3 class="text-danger">Personal Loan for Govt. Employee (HOPE)</h3>
	<h5 class="text-success">Product Summary</h5>
	 <p style="text-align:justify;">For a Govt. employee, it is very important to meet expenses of Education, Medical 
	 Treatment for self/ family members. Through the products that Personal Loan offers to the Govt. employees truly offers
	 a smooth transition in their life.</p>
	 <h5 class=" text-success">The Eligibility</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	             <li style="list-style-type:circle!important;margin-left:15px;"> Age between 25 years to 65 years at the time of maturity of loan.</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum Basic salary of BDT 16,000 and salary grade 12th & above are acceptable.</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum six (6) months Bank A/C relationship with any scheduled bank in Bangladesh</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Having service length / Professional experience more than 1 year.</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Employee of Govt. and semi govt. organization</li>
                 
	 </ul>
	 </div>
<div class="col-lg-4 col-md-4 col-12">
	 <h5 class=" text-success">The Securities</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Postdated Cheques, Undated Cheque & one or two personal guarantee (One from family member & one from colleague/Doctor/<br>Landlord/Banker/Govt. employee/professionals)</li>
        </ul>

		<h5 class=" text-success">We Offer</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest loan ceiling of BDT 25 Lac in the market</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest Loan tenure up to 60 months</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Top Up Loan facility</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Joint apply can be possible</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan A/C statement or Tax certificate also free of cost</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Partial prepayment or early settlement option</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">No Hidden cost</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Insurance Coverage</li>
        </ul> 
		
		
		<h5 class=" text-success">Required Documents</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Application Form duly filled up and signed</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Recent Studio Photographs of Applicant & guarantor(s)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Valid NID of Applicant and Guarantor(s) (National ID/Passport/Driving License)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">E-TIN Copy</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Salary Certificate/LOI</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Pay slip / Debit voucher</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Bank statement of last 06 (Six) months</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Copy of utility bill – Electricity / WASA / GAS (If applicable)</li>
	 </ul>
		</div>
		
		<div class="col-lg-4 col-md-4 col-12">
	<h5 class=" text-success">Made of Payment</h5>
		
		<ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Equal monthly installment basis up to 60 months through postdated cheques or Direct Debit Instructions (DDI)</li>
	</ul>
	
	<div class="row">
	<div class="col-lg-12 text-center mt-4">
	 <a href="#" id="govtapply"class="apply">Apply Now</a>
	</div>
	</div>
    </div>
    </div>
</section>




                                   <!--TEACHER LOAN OPTION START-->
	  
	  
	  <section class="seven " id="teacherloan">
	  <div class="row">
	<div class="col-lg-4 col-md-4 col-12">
	<h3 class="text-danger">Personal Loan for Teacher (BEACON)</h3>
	<h5 class="text-success">Product Summary</h5>
	 <p style="text-align:justify;">Teachers are an important link in the education chain. To fully support them we are 
	 providing such amazing offers that can meet their financial exigencies.</p>
	 <h5 class=" text-success">The Eligibility</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	             <li style="list-style-type:circle!important;margin-left:15px;"> Age between 25 years to 65 years at the time of maturity of loan.</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum monthly Income of BDT 22,000, Tuition income also consider</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum six (6) months Bank A/C relationship with any scheduled bank in Bangladesh</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Having service length / Professional experience more than 1 year.</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Teacher of Govt./ Semi govt./Private in schools, colleges and universities</li>
                 
	 </ul>
	 </div>
<div class="col-lg-4 col-md-4 col-12">
	 <h5 class=" text-success">The Securities</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Postdated cheques, Total receivable cheque & Personal Guarantee (s)</li>
        </ul>

		<h5 class=" text-success">We Offer</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest loan ceiling of BDT 25 Lac in the market</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest Loan tenure up to 60 months</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Top Up Loan facility</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Joint apply can be possible</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan A/C statement or Tax certificate also free of cost</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Partial prepayment or early settlement option</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">No Hidden cost</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Insurance Coverage</li>
        </ul> 
		
		
		<h5 class=" text-success">Required Documents</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Application Form duly filled up and signed</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Recent Studio Photographs of Applicant & guarantor(s)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Valid NID of Applicant and Guarantor(s) (National ID/Passport/Driving License)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">E-TIN Copy</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Salary Certificate/LOI</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Pay slip / Debit voucher</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Bank statement of last 06 (Six) months</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Copy of utility bill – Electricity / WASA / GAS (If applicable)</li>
	 </ul>
		</div>
		
		<div class="col-lg-4 col-md-4 col-12">
	<h5 class=" text-success">Made of Payment</h5>
		
		<ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Equal monthly installment basis up to 60 months through postdated cheques or Direct Debit Instructions (DDI)</li>
	</ul>
	
	<div class="row">
	<div class="col-lg-12 text-center mt-4">
	 <a href="#" id="teacherapply"class="apply">Apply Now</a>
	</div>
	</div>
    </div>
    </div>
</section>



                                   <!--TDR LOAN OPTION START-->
	  
	  
	  <section class="seven " id="tdrloan">
	  <div class="row">
	<div class="col-lg-9 col-md-4 col-12">
	<h3 class="text-danger">Loan against TDR</h3>
	<h5 class="text-success">Product Summary</h5>
	 <p style="text-align:justify;">You can avail a loan against the security of TDR. The loan may be used to meet emergency 
	 financial requirements, to carry on business activities, for direct investment.</p>
	 <h5 class=" text-success">Features</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	             <li style="list-style-type:circle!important;margin-left:15px;"> Your deposit will grow with attractive interest rate with flexible tenure through Term Deposit Receipt(TDR).</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Organizations can also avail loan facility against your deposit to meet urgent financial needs</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Automatic renewal facility at maturity</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Premature closure facility at savings rate</li>
                  
	 </ul>


		
		
	<div class="row">
	<div class="col-lg-12 text-center mt-4">
	 <a href="#"id="tdrapply"class="apply">Apply Now</a>
	</div>
	</div>
    </div>
    </div>
</section>


                                       <!--HOME LOAN OPTION START-->
	  
	  
	  <section class="seven " id="homeloan">
	  <div class="row">
	<div class="col-lg-4 col-md-4 col-12">
	<h3 class="text-danger">Home Loan</h3>
	<h5 class="text-success">Product Summary</h5>
	 <p style="text-align:justify;">Home is a dream of a person that shows the quantity of efforts, sacrifices luxuries and 
	 above all gathering funds by little to afford one’s dream. Home is one of the things that everyone wants to own. Home is
	 a shelter to person where he rests and feels comfortable.

     A new home brings with it new hopes, joys and emotions. At LankaBangla, we have shared new hopes, joys and emotions with 
	 our customers. Our home loan product is customized to provide solutions with flexible option, guidance and helping one 
	 to fulfill the housing needs.</p>
	 <h5 class=" text-success">The Eligibility</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	             <li style="list-style-type:circle!important;margin-left:15px;"> Age limit: minimum 21 years, maximum 70 years (at loan maturity)</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Salaried person, businessman, self-employed, or a person who has fixed rental income</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum justified net income of BDT 50,000/-</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Any lucrative areas in Bangladesh like all the Municipality/City Corporation /Upozilla Sadar in Bangladesh & adjacent area of the Municipality/City Corporation /Upozilla Sadar in Bangladesh</li>
                  
	 </ul>
	 </div>
<div class="col-lg-4 col-md-4 col-12">

                   <ul class=" text-dark"style="text-align:justify;">
                      <li style="list-style-type:circle!important;margin-left:15px;">Having 2 years’ service & 3 years' experience in the related business</li>
                  </ul>
	 <h5 class=" text-success">The Securities</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Proposed property and/or any property acceptable to BMS may be taken as collateral. Property is required to be Registered Mortgage through TPA (Tripartite Agreement) or Registered Mortgage as per Law prevailing in Bangladesh.</li>
        </ul>

		<h5 class=" text-success">We Offer</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest loan ceiling of BDT 100 million</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan term up to 25 years including maximum 12 months moratorium period</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">EMI calculation on Monthly Reducing Balance Method</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Partial Prepayment or Early Settlement options at any time on outstanding principal amount.</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Approval of home loan before purchase of apartment for high net worth customer</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan disbursement during the construction stage</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Disburse against tripartite agreement or registered mortgage</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Top up facility</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan takeover facility</li>
	 </ul> 
		
		</div>
		
		<div class="col-lg-4 col-md-4 col-12">
		 <ul class=" text-dark"style="text-align:justify;">
		<li style="list-style-type:circle!important;margin-left:15px;">Semi Fixed and Variable interest rate – anyone can choose</li>
	    <li style="list-style-type:circle!important;margin-left:15px;">Loan facilities for Non-Resident Bangladeshis</li>
        </ul>
		
		<h5 class=" text-success">Required Documents</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Application Form duly filled up and signed</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Recent Studio Photographs of Applicant & guarantor(s)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Valid NID of Applicant and Guarantor(s) (National ID/Passport/Driving License)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">eTIN Certificate( IT10B is required if applicable)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Bank Statement of last 12 months.</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Copy of utility bill – Electricity / WASA / GAS (If applicable)</li>
	 </ul>
	 
	<div class="row">
	<div class="col-lg-12 text-center mt-4">
	 <a href="#"id="homeapply"class="apply">Apply Now</a>
	</div>
	</div>
    </div>
    </div>
</section>


                                    <!--PROPERTY LOAN OPTION START-->
	  
	  
	  <section class="seven " id="propertyloan">
	  <div class="row">
	<div class="col-lg-4 col-md-4 col-12">
	<h3 class="text-danger">Loan Against Property</h3>
	<h5 class="text-success">Product Summary</h5>
	 <p style="text-align:justify;">A dream comes true! An ALL PURPOSE LOAN for anything that life throws up at you!! 
	 BMS's Loan Against Property helps you meet all your financial needs. Let your property be a shelter to your dreams. 
	 BMS’s Loan Against Property is a multi-purpose loan that can be used for increase your earning capacity or personal
	 needs.</p>
	 <h5 class=" text-success">The Eligibility</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	             <li style="list-style-type:circle!important;margin-left:15px;"> Age limit: minimum 21 years, maximum 70 years (at loan maturity)</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Salaried person, businessman, self-employed, or a person who has fixed rental income</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum justified net income of BDT 50,000/-</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">All the Municipality/City Corporation /Upozilla Sadar in Bangladesh & adjacent area of the Municipality/City Corporation /Upozilla Sadar</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Having 2 years' service & 3 years' experience in the related business</li>
                  
	 </ul>
	 </div>
	 
      <div class="col-lg-4 col-md-4 col-12">


	 <h5 class=" text-success">The Securities</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Proposed property and/or any property acceptable to BMS may be taken as collateral. Property is required to be Registered Mortgage through TPA (Tripartite Agreement) or Registered Mortgage as per Law prevailing in Bangladesh.</li>
        </ul>

		<h5 class=" text-success">We Offer</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest loan ceiling of BDT 100 million</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan term up to 15 years including maximum 12 months moratorium period</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">EMI calculation on Monthly Reducing Balance Method</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Partial Prepayment or Early Settlement options at any time on outstanding principal amount.</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Semi Fixed and Variable interest rate – anyone can choose</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">We accept both – residential and commercial property</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Disburse against registered mortgage of existing property</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Top up facility</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan takeover facility</li>
	 </ul> 
		
		</div>
		
		<div class="col-lg-4 col-md-4 col-12">
		
		<h5 class=" text-success">Required Documents</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Application Form duly filled up and signed</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Recent Studio Photographs of Applicant & guarantor(s)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Valid NID of Applicant and Guarantor(s) (National ID/Passport/Driving License)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">eTIN Certificate( IT10B is required if applicable)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Bank Statement of last 12 months.</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Copy of utility bill – Electricity / WASA / GAS (If applicable)</li>
	 </ul>
	 
	<div class="row">
	<div class="col-lg-12 text-center mt-4">
	 <a href="#"id="propertyapply"class="apply">Apply Now</a>
	</div>
	</div>
    </div>
    </div>
</section>


                                            <!--FLEXI HOME LOAN OPTION START-->
	  
	  
	  <section class="seven " id="flexiloan">
	  <div class="row">
	<div class="col-lg-4 col-md-4 col-12">
	<h3 class="text-danger">Flexi Home Loan</h3>
	<h5 class="text-success">Product Summary</h5>
	 <p style="text-align:justify;">Without selecting the property, clients can apply for this loan. prospective clients need 
	 to open up a deposit account with LBFL before/after selection of property. this amount will be used as booking money 
	 money/initial investment by the clients.</p>
	 <h5 class=" text-success">The Eligibility</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	             <li style="list-style-type:circle!important;margin-left:15px;"> Age limit: minimum 21 years, maximum 70 years (at loan maturity)</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Salaried person, businessman, self-employed, or a person who has fixed rental income</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum justified net income of BDT 50,000/-</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">All the Municipality/City Corporation /Upozilla Sadar in Bangladesh & adjacent area of the Municipality/City Corporation /Upozilla Sadar</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Having 2 years' service & 3 years' experience in the related business</li>
                  
	 </ul>
	 </div>
	 
      <div class="col-lg-4 col-md-4 col-12">


	 <h5 class=" text-success">The Securities</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Proposed property and/or any property acceptable to BMS may be taken as collateral. Property is required to be Registered Mortgage through TPA (Tripartite Agreement) or Registered Mortgage as per Law prevailing in Bangladesh.</li>
        </ul>

		<h5 class=" text-success">We Offer</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest loan ceiling of BDT 100 million</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan term up to 30 years including maximum 6 months moratorium period</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">EMI calculation on Monthly Reducing Balance Method</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Approval of home loan before purchase of apartment for high net worth customer</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Partial Prepayment or Early Settlement options at any time on outstanding principal amount.</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Semi Fixed and Variable interest rate – anyone can choose</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan disbursement during the construction stage</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Disburse against tripartite agreement or registered mortgage</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan facilities for Non-Resident Bangladeshis</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Top up facility</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan takeover facility</li>
	 </ul> 
		
		</div>
		
		<div class="col-lg-4 col-md-4 col-12">
		
		<h5 class=" text-success">Required Documents</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Application Form duly filled up and signed</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Recent Studio Photographs of Applicant & guarantor(s)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Valid NID of Applicant and Guarantor(s) (National ID/Passport/Driving License)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">eTIN Certificate( IT10B is required if applicable)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Bank Statement of last 12 months.</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Copy of utility bill – Electricity / WASA / GAS (If applicable)</li>
	 </ul>
	 
	<div class="row">
	<div class="col-lg-12 text-center mt-4">
	 <a href="#"id="flexiapply"class="apply">Apply Now</a>
	</div>
	</div>
    </div>
    </div>
</section>


                                            <!--SWAPNO LOAN OPTION START-->
	  
	  
	  <section class="seven " id="swapnoloan">
	  <div class="row">
	<div class="col-lg-4 col-md-4 col-12">
	<h3 class="text-danger">Swapno Loan</h3>
	<h5 class="text-success">Product Summary</h5>
	 <p style="text-align:justify;">Any qualified professionals / entrepreneurs are eligible to take Swapno loan Puchase of 
	 RAJUK/CDA/NHA or any other Government approved Residential/Commercial Land/Plot and freehold property</p>
	 <h5 class=" text-success">The Eligibility</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	             <li style="list-style-type:circle!important;margin-left:15px;"> Age limit: minimum 21 years, maximum 65 years (at loan maturity)</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Salaried person, businessman, self-employed, or a person who has fixed rental income</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum justified net income of BDT 50,000/-</li>
                 </ul>
				 
				 <h5 class=" text-success">The Securities</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Proposed property and/or any property acceptable to BMS may be taken as collateral. Property is required to be Registered Mortgage as per Law prevailing in Bangladesh.</li>
        </ul>
	 </div>
	 
      <div class="col-lg-4 col-md-4 col-12">


	 

		<h5 class=" text-success">We Offer</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest loan ceiling of BDT 50 million</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan term up to 25 years including maximum 6 months moratorium period</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">EMI calculation on Monthly Reducing Balance Method</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Partial Prepayment or Early Settlement options at any time on outstanding principal amount.</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Semi Fixed and Variable interest rate – anyone can choose</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Disburse against tripartite agreement or registered mortgage</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan facilities for Non-Resident Bangladeshis</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Top up facility</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan takeover facility</li>
	 </ul> 
		
		</div>
		
		<div class="col-lg-4 col-md-4 col-12">
		
		<h5 class=" text-success">Required Documents</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Application Form duly filled up and signed</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Recent Studio Photographs of Applicant & guarantor(s)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Valid NID of Applicant and Guarantor(s) (National ID/Passport/Driving License)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">eTIN Certificate( IT10B is required if applicable)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Bank Statement of last 12 months.</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Copy of utility bill – Electricity / WASA / GAS (If applicable)</li>
	 </ul>
	 
	<div class="row">
	<div class="col-lg-12 text-center mt-4">
	 <a href="#"id="swapnoapply"class="apply">Apply Now</a>
	</div>
	</div>
    </div>
    </div>
</section>


                                  <!--APON THIKANA LOAN OPTION START-->
	  
	  
	  <section class="seven " id="thikanaloan">
	  <div class="row">
	<div class="col-lg-4 col-md-4 col-12">
	<h3 class="text-danger">Affordable Housing (AH) Apon Thikana</h3>
	<h5 class="text-success">Product Summary</h5>
	 <p style="text-align:justify;">Mainly to help out the rural people to buy/construct their own house/homes this Apon 
	 Thikana is providing some amazing service..</p>
	 <h5 class=" text-success">The Eligibility</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	             <li style="list-style-type:circle!important;margin-left:15px;"> Age limit: minimum 21 years, maximum 70 years (at loan maturity)</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Salaried person, businessman, self-employed, or a person who has fixed rental income</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum justified net income of BDT 50,000/-</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">All the Municipality/City Corporation /Upozilla Sadar in Bangladesh & adjacent area of the Municipality/City Corporation /Upozilla Sadar</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Having 2 years' service & 3 years' experience in the related business</li>
                  
				 </ul>
				 
				 <h5 class=" text-success">The Securities</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Proposed property and/or any property acceptable to BMS may be taken as collateral. Property is required to be Registered Mortgage as per Law prevailing in Bangladesh.</li>
        </ul>
	 </div>
	 
      <div class="col-lg-4 col-md-4 col-12">


	 

		<h5 class=" text-success">We Offer</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Highest loan ceiling of BDT 6.00 million</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan term up to 10 years including maximum 6 months moratorium period</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">EMI calculation on Monthly Reducing Balance Method</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Partial Prepayment or Early Settlement options at any time on outstanding principal amount.</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Semi Fixed and Variable interest rate – anyone can choose</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Disburse against tripartite agreement or registered mortgage</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan facilities for Non-Resident Bangladeshis</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan disbursement during the construction stage</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Top up facility</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan takeover facility</li>
	 </ul> 
		
		</div>
		
		<div class="col-lg-4 col-md-4 col-12">
		
		<h5 class=" text-success">Required Documents</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Application Form duly filled up and signed</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Recent Studio Photographs of Applicant & guarantor(s)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Valid NID of Applicant and Guarantor(s) (National ID/Passport/Driving License)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">eTIN Certificate( IT10B is required if applicable)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Bank Statement of last 12 months.</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Copy of utility bill – Electricity / WASA / GAS (If applicable)</li>
	 </ul>
	 
	<div class="row">
	<div class="col-lg-12 text-center mt-4">
	 <a href="#"id="aponapply"class="apply">Apply Now</a>
	</div>
	</div>
    </div>
    </div>
</section>


                            <!--AUTO LOAN OPTION START-->
	  
	  
	  <section class="seven " id="autoloan">
	  <div class="row">
	<div class="col-lg-4 col-md-4 col-12">
	<h3 class="text-danger">Auto Loan</h3>
	<h5 class="text-success">Product Summary</h5>
	 <p style="text-align:justify;">Buying a Car is one of the most important decisions that you will make for you and your family. LankaBangla specializes in Car finance for individual and Institutions alike.

Our Car loan facilities have competitive rates, convenient payment option that LankaBangla a smart choice for buying a car on finance.

You can buy the Car of your choice under our Auto Loan scheme from a wide range of showroom/dealers.</p>
	 <h5 class=" text-success">The Eligibility</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	             <li style="list-style-type:circle!important;margin-left:15px;"> Age limit: minimum 23 years, maximum 65 years (at loan maturity)</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Salaried person, businessman, self-employed, or a person who has fixed rental income</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Minimum justified net income of BDT 30,000/-</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">All the Municipality/City Corporation /Upozilla Sadar in Bangladesh & adjacent area of the Municipality/City Corporation /Upozilla Sadar</li>
                  <li style="list-style-type:circle!important;margin-left:15px;">Having 2 years' service & 3 years' experience in the related business</li>
                  
				 </ul>
				 
				 
	 </div>
	 
      <div class="col-lg-4 col-md-4 col-12">


	 <h5 class=" text-success">The Securities</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Proposed property and/or any property acceptable to BMS may be taken as collateral. Property is required to be Registered Mortgage as per Law prevailing in Bangladesh.</li>
        </ul>

		<h5 class=" text-success">We Offer</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan facility up to 90% of vehicle price but not exceeding BDT 15.00 million for individual client</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Up to 100% loan facility for institution/organization</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">100% loan facility for the individual customer secured by full or partial TDR/ FDR and for the employee of specialized corporate</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Three (3) months grace/moratorium period facility for salaried individual.</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan tenure from 12 to 72 months</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Loan facility for both individual and institution/ organizational name</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Early settlement & partial pre-payment facility</li>
	</ul> 
		
		</div>
		
		<div class="col-lg-4 col-md-4 col-12">
		
		<h5 class=" text-success">Required Documents</h5>
	 <ul class=" text-dark"style="text-align:justify;">
	 <li style="list-style-type:circle!important;margin-left:15px;">Application Form duly filled up and signed</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Recent Studio Photographs of Applicant & guarantor(s)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Valid NID of Applicant and Guarantor(s) (National ID/Passport/Driving License)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">eTIN Certificate( IT10B is required if applicable)</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Bank Statement of last 12 months.</li>
	 <li style="list-style-type:circle!important;margin-left:15px;">Copy of utility bill – Electricity / WASA / GAS (If applicable)</li>
	 </ul>
	 
	<div class="row">
	<div class="col-lg-12 text-center mt-4">
	 <a href="#" id="autoapply"class="apply">Apply Now</a>
	</div>
	</div>
    </div>
    </div>
</section>



     
    </div>
	

    </div>
    </div>
  </div>
</div>




</section><br>

<div class="text-center footer-bottom justify-content-center bg-dark text-white"style="padding:4px 0;">
				<p>© Copyright 2020 All Rights Reserved.This site made by <span style="color:red;font-size:20px;">BMS</span> group</p>
			</div>



                <div class="scrolltop float-right">
				<i class="fa fa-arrow-up" onclick="topFunction()" id="mybtn"> </i>
				</div>
                  
                <script src="jquery-1.12.4.min.js"></script>
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   <script src="jquery.waypoints.min.js"></script>
			   <script src="jquery.counterup.min.js"></script>
			   <script src="jquery-ui.min.js"></script>
              
			  <script type="text/javascript">
			  
			  //for personal freedoom loan
			  
				$(document).ready(function(){
				$("#clickpersonal").click(function(){
					
				          $("#personalloan").show();
		                  $("#doctorloan").hide();
		                  $("#landloan").hide();
		                  $("#businessloan").hide();
		                  $("#govtloan").hide();
		                  $("#teacherloan").hide();
		                  $("#tdrloan").hide();
		                  $("#homeloan").hide();
		                  $("#propertyloan").hide();
		                  $("#flexiloan").hide();
		                  $("#swapnoloan").hide();
		                  $("#thikanaloan").hide();
		                  $("#autoloan").hide();
				});
				});
				
				//for doctors loan
				
				$(document).ready(function(){
				$("#clickdoctor").click(function(){
					
				          $("#personalloan").hide();
		                  $("#doctorloan").show();
						  $("#landloan").hide();
						  $("#businessloan").hide();
		                  $("#govtloan").hide();
		                  $("#teacherloan").hide();
		                  $("#tdrloan").hide();
		                  $("#homeloan").hide();
		                  $("#propertyloan").hide();
		                  $("#flexiloan").hide();
		                  $("#swapnoloan").hide();
		                  $("#thikanaloan").hide();
		                  $("#autoloan").hide();
				});
				});
				
				//for landlord loan
				
				$(document).ready(function(){
				$("#clickland").click(function(){
					
				          $("#personalloan").hide();
		                  $("#doctorloan").hide();
						  $("#landloan").show();
						  $("#businessloan").hide();
		                  $("#govtloan").hide();
		                  $("#teacherloan").hide();
		                  $("#tdrloan").hide();
		                  $("#homeloan").hide();
		                  $("#propertyloan").hide();
		                  $("#flexiloan").hide();
		                  $("#swapnoloan").hide();
		                  $("#thikanaloan").hide();
		                  $("#autoloan").hide();
				});
				});
				
				//for business loan
				
				$(document).ready(function(){
				$("#clickbusiness").click(function(){
					
				          $("#personalloan").hide();
		                  $("#doctorloan").hide();
						  $("#landloan").hide();
						  $("#businessloan").show();
		                  $("#govtloan").hide();
		                  $("#teacherloan").hide();
		                  $("#tdrloan").hide();
		                  $("#homeloan").hide();
		                  $("#propertyloan").hide();
		                  $("#flexiloan").hide();
		                  $("#swapnoloan").hide();
		                  $("#thikanaloan").hide();
		                  $("#autoloan").hide();
				});
				});
				
				//for govt employee loan
				
				$(document).ready(function(){
				$("#clickgovt").click(function(){
					
				          $("#personalloan").hide();
		                  $("#doctorloan").hide();
						  $("#landloan").hide();
						  $("#businessloan").hide();
		                  $("#govtloan").show();
		                  $("#teacherloan").hide();
		                  $("#tdrloan").hide();
		                  $("#homeloan").hide();
		                  $("#propertyloan").hide();
		                  $("#flexiloan").hide();
		                  $("#swapnoloan").hide();
		                  $("#thikanaloan").hide();
		                  $("#autoloan").hide();
				});
				});
				
				
				//for teacher loan
				
				$(document).ready(function(){
				$("#clickteacher").click(function(){
					
				          $("#personalloan").hide();
		                  $("#doctorloan").hide();
						  $("#landloan").hide();
						  $("#businessloan").hide();
		                  $("#govtloan").hide();
		                  $("#teacherloan").show();
		                  $("#tdrloan").hide();
		                  $("#homeloan").hide();
		                  $("#propertyloan").hide();
		                  $("#flexiloan").hide();
		                  $("#swapnoloan").hide();
		                  $("#thikanaloan").hide();
		                  $("#autoloan").hide();
				});
				});
				
				
				//for tdr loan
				
				$(document).ready(function(){
				$("#clicktdr").click(function(){
					
				          $("#personalloan").hide();
		                  $("#doctorloan").hide();
						  $("#landloan").hide();
						  $("#businessloan").hide();
		                  $("#govtloan").hide();
		                  $("#teacherloan").hide();
		                  $("#tdrloan").show();
		                  $("#homeloan").hide();
		                  $("#propertyloan").hide();
		                  $("#flexiloan").hide();
		                  $("#swapnoloan").hide();
		                  $("#thikanaloan").hide();
		                  $("#autoloan").hide();
				});
				});
				
				//for home loan
				
				$(document).ready(function(){
				$("#clickhome").click(function(){
					
				          $("#personalloan").hide();
		                  $("#doctorloan").hide();
						  $("#landloan").hide();
						  $("#businessloan").hide();
		                  $("#govtloan").hide();
		                  $("#teacherloan").hide();
		                  $("#tdrloan").hide();
		                  $("#homeloan").show();
		                  $("#propertyloan").hide();
		                  $("#flexiloan").hide();
		                  $("#swapnoloan").hide();
		                  $("#thikanaloan").hide();
		                  $("#autoloan").hide();
				});
				});
				
				//for property loan
				
				$(document).ready(function(){
				$("#clickproperty").click(function(){
					
				          $("#personalloan").hide();
		                  $("#doctorloan").hide();
						  $("#landloan").hide();
						  $("#businessloan").hide();
		                  $("#govtloan").hide();
		                  $("#teacherloan").hide();
		                  $("#tdrloan").hide();
		                  $("#homeloan").hide();
		                  $("#propertyloan").show();
		                  $("#flexiloan").hide();
		                  $("#swapnoloan").hide();
		                  $("#thikanaloan").hide();
		                  $("#autoloan").hide();
				});
				});
				
				//for flexi loan
				
				$(document).ready(function(){
				$("#clickflexi").click(function(){
					
				          $("#personalloan").hide();
		                  $("#doctorloan").hide();
						  $("#landloan").hide();
						  $("#businessloan").hide();
		                  $("#govtloan").hide();
		                  $("#teacherloan").hide();
		                  $("#tdrloan").hide();
		                  $("#homeloan").hide();
		                  $("#propertyloan").hide();
		                  $("#flexiloan").show();
		                  $("#swapnoloan").hide();
		                  $("#thikanaloan").hide();
		                  $("#autoloan").hide();
				});
				});
				
				//for swapno loan
				
				$(document).ready(function(){
				$("#clickswapno").click(function(){
					
				          $("#personalloan").hide();
		                  $("#doctorloan").hide();
						  $("#landloan").hide();
						  $("#businessloan").hide();
		                  $("#govtloan").hide();
		                  $("#teacherloan").hide();
		                  $("#tdrloan").hide();
		                  $("#homeloan").hide();
		                  $("#propertyloan").hide();
		                  $("#flexiloan").hide();
		                  $("#swapnoloan").show();
		                  $("#thikanaloan").hide();
		                  $("#autoloan").hide();
				});
				});
				
				
				//for thikana loan
				
				$(document).ready(function(){
				$("#clickthikana").click(function(){
					
				          $("#personalloan").hide();
		                  $("#doctorloan").hide();
						  $("#landloan").hide();
						  $("#businessloan").hide();
		                  $("#govtloan").hide();
		                  $("#teacherloan").hide();
		                  $("#tdrloan").hide();
		                  $("#homeloan").hide();
		                  $("#propertyloan").hide();
		                  $("#flexiloan").hide();
		                  $("#swapnoloan").hide();
		                  $("#thikanaloan").show();
		                  $("#autoloan").hide();
				});
				});
				
				//for auto loan
				
				$(document).ready(function(){
				$("#clickauto").click(function(){
					
				          $("#personalloan").hide();
		                  $("#doctorloan").hide();
						  $("#landloan").hide();
						  $("#businessloan").hide();
		                  $("#govtloan").hide();
		                  $("#teacherloan").hide();
		                  $("#tdrloan").hide();
		                  $("#homeloan").hide();
		                  $("#propertyloan").hide();
		                  $("#flexiloan").hide();
		                  $("#swapnoloan").hide();
		                  $("#thikanaloan").hide();
		                  $("#autoloan").show();
				});
				});
				
				
				
				 </script>
			  
			  <script>
						 $('.count').counterUp({
				            delay:10,
				             time:200
				                 })
								 
			    mybutton=document.getElementById("mybtn");
				window.onscroll=function(){scrollFunction()};
				function scrollFunction()
				{
				if(document.body.scrollTop>20 || document.documentElement.scrollTop>20){
				mybtn.style.display="block";
				}
				else{
				mybtn.style.display="none";
				}
				}
				function topFunction(){
				document.body.scrollTop=0;
				document.documentElement.scrollTop=0;
				}
				
				 
				 
				 // loan apply option 
				 
				 
				  $(document).ready(function(){
	              $("#personalapply").click(function(){
		             $(".login-container").show();
	                   });
					   }); 
					   
					   $(document).ready(function(){
	                 $("#doctorapply").click(function(){
		             $(".login-container").show();
	                   });
					   });
					   
					   $(document).ready(function(){
	                 $("#landlordapply").click(function(){
		             $(".login-container").show();
	                   });
					   });
					   
					    $(document).ready(function(){
	                 $("#businessapply").click(function(){
		             $(".login-container").show();
	                   });
					   });
					   
					    $(document).ready(function(){
	                 $("#govtapply").click(function(){
		             $(".login-container").show();
	                   });
					   });
					   
					     $(document).ready(function(){
	                 $("#teacherapply").click(function(){
		             $(".login-container").show();
	                   });
					   });
					   
					    $(document).ready(function(){
	                 $("#tdrapply").click(function(){
		             $(".login-container").show();
	                   });
					   });
					   
					    $(document).ready(function(){
	                 $("#homeapply").click(function(){
		             $(".login-container").show();
	                   });
					   });
					   
					    $(document).ready(function(){
	                 $("#propertyapply").click(function(){
		             $(".login-container").show();
	                   });
					   });
					    $(document).ready(function(){
	                 $("#flexiapply").click(function(){
		             $(".login-container").show();
	                   });
					   });
					   
					    $(document).ready(function(){
	                 $("#swapnoapply").click(function(){
		             $(".login-container").show();
	                   });
					   });
					   
					   $(document).ready(function(){
	                 $("#aponapply").click(function(){
		             $(".login-container").show();
	                   });
					   });
					   
					   $(document).ready(function(){
	                 $("#autoapply").click(function(){
		             $(".login-container").show();
	                   });
					   });
					   
					   
					   $(document).ready(function(){
	              $("#crossprofile").click(function(){
		             $(".login-container").hide();
	                   });
					   });
					   
				 
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
	              $("#fourthnext").click(function(e){
					   e.preventDefault();
		            $("#errorLoan").html('');
					$("#errorTerm").html('');
					$("#errorAmount").html('');
					$("#errorappImage").html('');
									  
					  if($("#loan").val()==''){
						 $("#errorLoan").html('*is required');
						 return false;
					 }
					  
					  else if($("#term").val()==''){
						 $("#errorTerm").html('*is required');
						 return false;
					 }
										 
					   else if($("#amount").val()==''){
						 $("#errorAmount").html('*is required');
						 return false;
					 }
					  
					  else if($("#profileappImage").val()==''){
						 $("#errorappImage").html('*is required');
						 return false;
					 }
					  
					  else{
		             $("#bottompart2").show();
		             $("#bottompart").hide();
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
					   
					   $(document).ready(function(){
	              $("#fifthprev").click(function(){
		             $("#bottompart").show();
		             $("#bottompart2").hide();
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
	
	     $(document).ready(function(){
				  $('#datepicker').datepicker({
					  dateFormat: "dd-mm-yy",
					  changeMonth:true,
					  changeYear:true
				  });
			  })
				
				
                        </script>
</body>
</html>