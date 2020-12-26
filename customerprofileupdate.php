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
	 $accountno = $_GET['account_no'];
	 $mobile = $_POST['phone_no'];
	 $email = $_POST['email'];
	 $address = $_POST['address'];
	 $city = $_POST['city'];
	 $postcode = $_POST['post_code'];
	 $maritial_status = $_POST['maritial_status'];
	 $education = $_POST['educational_qualification'];
      $citizen = $_POST['citizen'];
      $income = $_POST['income'];
	  
	  $update = "UPDATE customer_account SET phone_no='$mobile', email='$email', address='$address', city='$city', post_code='$postcode', maritial_status='$maritial_status', educational_qualification='$education', citizen='$citizen', income='$income'  WHERE account_no = '$accountno'";
$result = mysqli_query($conn,$update);
if($result){
	echo '<script>alert("Successfully update your profile");</script>';
	//header("location:loginres.php");
}
else{
	echo '<script>alert("something wrong");</script>';
	
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
						
						
				        <!-- sidebar starts-->
					
				        <!-- sidebar ends-->
						
				
				         <!-- content part start-->
						 
				         <div class="content">
								
						 <div class="dashboard_home">
						 <h4 class="container"><span ><a href="customerprofile.php"><i class="fa fa-home i-items"></i> <span class="hidden-menu">Home</span></a></span> <i class="fa fa-angle-right text-info i-items" style="font-size:20px;padding:0 12px;"></i> <i class="fa fa-users i-items text-info"></i> <span class="hidden-menu text-info">Accounts</span> <i class="fa fa-angle-right text-info" style="font-size:20px;padding:0 12px;"></i> <i class="fa fa-list i-items"></i> <span class="hidden-menu">Customer Profile update</span></h4>
						 </div>
						 
						 <div class="container mt-3">
						 
						 <div class="account-details col-12">
						 <h3 class="text-left">Update customer profile</h3>
						 </div>
						 <!--account details part start -->
						 <div class="update-container mt-4">
						
						 <div class="row">
						 <div class="col-12 col-lg-8 form-update">
						  <form action=""method="post">
						 <div class="row">
						 
						 <div class="input-update three col-lg-5 col-12">
			             <div class="iup">
			              <i class="fa fa-phone"></i>
			              </div>
			                <div>
			              <h5>Mobile Number<span class="text-danger"id="errorMobile"style="font-size:12px;margin-left:15px;"></span></h5>
			             <input type="tel" class="input"id="mobileno"name="phone_no" placeholder="Enter Phone No" maxlength="11" required>
			               </div>
			                </div>
							
				<div class="input-update four col-lg-5 col-12">
			   <div class="iup">
			   <i class="fa fa-envelope"></i>
			   </div>
			   <div>
			   <h5>Email Address<span class="text-danger"id="errorEmail"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="email"class="input"id="emailid"name="email"placeholder="Enter Email" required>
			   </div>
			   </div>
			             
			   <div class="input-update five col-lg-5 col-12">
			   <div class="iup">
			   <i class="fa fa-map-marker"></i>
			   </div>
			   <div>
			   <h5>Address<span class="text-danger"id="errorAddress"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="address"name="address"placeholder="Enter address" required>
			   </div>
			   </div>
			            
				<div class="input-update six col-lg-5 col-12">
			   <div class="iup">
			   <i class="fa fa-map"></i>
			   </div>
			   <div>
			   <h5>City<span class="text-danger"id="errorCity"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="city"name="city"placeholder="Enter city" required>
			   </div>
			   </div>
			   
			   <div class="input-update seven col-lg-5 col-12">
			   <div class="iup">
			   <i class="fa fa-qrcode"></i>
			   </div>
			   <div>
			   <h5>Post Code<span class="text-danger"id="errorPost"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="postcode"name="post_code"placeholder="Enter post code" maxlength="4"required>
			   </div>
			   </div>
			  
			   <div class="input-update nine col-lg-5 col-12">
			   <div class="iup">
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
			   
			     <div class="input-update eleven col-lg-5 col-12">
			   <div class="iup">
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
			   
			   <div class="input-update twelve col-lg-5 col-12">
			   <div class="iup">
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
			   
			   <div class="input-update fourten col-lg-5 col-12">
			   <div class="iup">
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
			   <a href="customerprofile.php"class="btn-button">Back</a>
			   </div>
			   <div class="btns col-lg-3 col-6">
			  <input type="submit" name="submit" value="Update"class="btn-button">
			   </div>
			   </div>
			   </form>
						 </div>
						 
						 
						 <div class="col-12 col-lg-4">
						 <div class="customerimage">
						 <form action="" method="post"enctype="multipart/form-data">
						 <div class="nineten col-lg-5 col-12 ml-3 mt-3">
			             <div>
			              <input type="file" name="file"id="profileImage"onchange="displayImage(this)"required>
				         </div>
			            </div>
			  
			           <div class="twenty col-lg-5 col-12 m-auto ">
			          <div class="image-preview"id="imagePreview">
		                <img src="previewimage.jpg"alt="Image Preview"class="image-preview-image"id="profileDisplay"onclick="triggerClick()">
		              </div>
			           </div>
					   <div class="pressimage">
					   <h6 class="text-center justify-center mt-2"style="color:#999;">Press on Image</h6>
					   </div>
			   
			   <div class="btns col-lg-3 col-6">
			  <input type="submit" name="change" value="Change Image"class="btn">
			   </div>
						 </form>
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
	
	if(isset($_POST['change'])){
	$accountno = $_GET['account_no'];
	
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
	$query = "UPDATE customer_account SET file='$filename' WHERE account_no = '$accountno'";
$output = mysqli_query($conn,$query);
if($output){
	echo '<script>alert("Successfully updated profile picture");</script>';
	//header("location:loginres.php");
}
else{
	echo '<script>alert("something wrong");</script>';
	
}
}
?>
						 </div>
						 </div>
						 </div>
						 <!--account details part end-->
						
						 
						
						 </div>
						 
						 </div>
		
				         <!-- content part end-->
				
	
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
	
	$(document).ready(function(){
		 $(".image-preview").click(function(e){
			 if($("#profileImage").val()==''){
						$(".pressimage").show();
					 }
					 else{
						$(".pressimage").hide(); 
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