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
	 $name = $_POST['name'];
	  $id = $_POST['employee_id'];
      $designation = $_POST['designation'];
      $address = $_POST['address'];
      $mobile = $_POST['mobile_no'];
      $email = $_POST['email'];
	  
	  $query = "SELECT * from registration where employee_id ='$id'";
	  $result = mysqli_query($conn,$query);
	  
	  while($row = mysqli_fetch_array($result)){
		$myid = $row['employee_id'];
		if($myid == $id){
				$sql ="UPDATE registration SET address='$address' ,mobile_no='$mobile',email='$email' WHERE employee_id ='$id'";
				$update = mysqli_query($conn,$sql);
				if($update){
	$error = "Profile Change Successfully";
	//header("location:loginres.php");
}
else{
	$error = "Something wrong";
	
}

			
		}else{
			$error = "This type of data does not exists here";
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
			    <script src="bootstrap.min.js"></script>
				<script src="jquery-3.5.1.min.js"></script>
				
				
				<link rel="stylesheet" href="main.css">
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
			  <li> <a href="#" id="profile"><i class="fa fa-user"></i></a></li>
			  </ul>
			  
			  <div class="logoutdiv">
			  <div class="container-fluid name">
			  <h5 class="text-dark"><?php echo  $_SESSION["name"]?></h5>
			  <h6 class="text-dark"><?php echo 'ID:',''.$_SESSION["employee_id"]?></h6>
			     <hr>
			  <a href="adminprofile.php" class="text-dark"><i class="fa fa-user-o"></i> Profile</a>
			   <hr>
			  <a href="password.php" class="text-dark"><i class="fa fa-edit"></i> Change Password</a>
			 <hr>
			  <a href="logout.php" class="text-dark"><i class="fa fa-power-off"></i> logout</a>
			    </div>
			    </div>
			    </div>
			    </div>
			  
				
				
				        <!-- header navbar ends-->
						
						
				        <!-- sidebar starts-->
						
						<div class="sidebar">
						<div class="sidebar_menu">
						<center>
						<img src="card.jpg"alt="not found"class="profile_image">
						<h2><?php echo  $_SESSION["name"]?></h2>
						</center>
						<li class="item"><a href="dashboard.php"class="menu_btn"><i class="fa fa-dashboard"></i><span> Dashboard</span></a></li>
						
						<li class="item" id="account"><a href="account.php#account"class="menu_btn"><i class="fa fa-users"></i><span> Accounts<i class="fa fa-chevron-down dropdown"></i></span></a>
						
						<div class="sub_menu">
						<a href="#"><i class="fa fa-user-plus"></i><span> New Account Request</span></a>
						<a href="#"><i class="fa fa-eye"></i><span> View Account Details</span></a>
						<a href="#"><i class="fa fa-check-square-o"></i><span> Approved Account</span></a>
						<a href="#"><i class="fa fa-user-times"></i><span> Rejected Account</span></a>
						<a href="#"><i class="fa fa-ban"></i><span> Terminated Account</span></a>
						</div>
						</li>
						
						<li class="item" id="loan"><a href="loan.php#loan"class="menu_btn"><i class="fa fa-cubes"></i><span> Loan<i class="fa fa-chevron-down dropdown"></i></span></a>
						<div class="sub_menu">
						<a href="#"><i class="fa fa-edit"></i><span> Add Loan</span></a>
						<a href="#"><i class="fa fa-edit"></i><span> Loan Request</span></a>
						<a href="#"><i class="fa fa-database"></i><span> All Loan</span></a>
						</div>
						</li>
						
						<li class="item" id="card"><a href="#card"class="menu_btn"><i class="fa fa-credit-card-alt"></i><span> Debit/Credit Card<i class="fa fa-chevron-down dropdown"></i></span></a>
						<div class="sub_menu">
						<a href="#"><i class="fa fa-cc-mastercard"></i><span> Card Request</span></a>
						<a href="#"><i class="fa fa-cc-mastercard"></i><span> All Cards</span></a>
						</div>
						</li>
						
						<li class="item"id="enquery"><a href="#enquery"class="menu_btn"><i class="fa fa-info-circle"></i><span> User Enquiry</span></a></li>
						
						<li class="item"id="logout"><a href="logout.php"class="menu_btn"><i class="fa fa-power-off"></i><span> Logout</span></a></li>
						
						</div>
						</div>
				        <!-- sidebar ends-->
						
				
				         <!-- content part start-->
						 
				         <div class="content">
						 <div class="dashboard">
						 <h3><span><i class="fa fa-user-o"></i></span> Profile</h3>
						 </div>
		
						 <div class="container mt-5">
						 
						 <!--card part start -->
						 
						 <div class="row">
						 
						  <!--card1 -->
						  
						 <div class="col-lg-8 offset-lg-2 col-12">
						 <div class="card"> 
						 
						 <div class="card-header bg-white text-success">
						 <div class="row align-items-left">
						 
						 <div class="col-2 dashboard-top one1">
						 <i class="fa fa-user-o fa-2x"></i>
						 </div>
						 
						 <div class="col-10">
						<h4>Edit Profile-
						<small>Complete your Profile</small>
						</h4>
						 </div>
						 
						 <div class="col-12 col-lg-12 text-dark">
						
						 	 
				<form action=""method="post">
				<div style = "font-size:16px; color:red; margin-top:10px" align="center"><?php echo $error; ?></div>
				<div class="input-group">
				<label class="control-label col-lg-3 col-sm-4 col-md-4 col-4"for="fname">Name:</label>		
                <div class="input-group-append col-lg-8 col-sm-8 col-md-8 col-8">
                 <input type="text" name="name"class="form-control"id="name"required readonly value="<?php echo $_SESSION["name"]?>">
			     </div>
                </div>
				
				<div class="input-group">
				<label class="control-label col-lg-3 col-sm-4 col-md-4 col-4"for="employeeid">Employee Id:</label>		
                <div class="input-group-append col-lg-8 col-sm-8 col-md-8 col-8">
                 <input type="text" name="employee_id"class="form-control"id="id"required readonly value="<?php echo $_SESSION["employee_id"]?>">
			       </div>
                </div>
				
				<div class="input-group">
				<label class="control-label col-lg-3 col-sm-4 col-md-4 col-4"for="designation1">Designation:</label>		
                <div class="input-group-append col-lg-8 col-sm-8 col-md-8 col-8">
                 <input type="text" name="designation"class="form-control"id="designation"required readonly value="<?php echo $_SESSION["designation"]?>">
				</div>
                </div>
				
				<div class="input-group">
				<label class="control-label col-lg-3 col-sm-4 col-md-4 col-4"for="address1">Address:</label>		
                <div class="input-group-append col-lg-8 col-sm-8 col-md-8 col-8">
                 <input type="text" name="address"class="form-control"id="address"required placeholder="enter your address">
			     </div>
                </div>
				
				<div class="input-group">
				<label class="control-label col-lg-3 col-sm-4 col-md-4 col-4"for="mobile_no1">Phone No:</label>		
                <div class="input-group-append col-lg-8 col-sm-8 col-md-8 col-8">
                 <input type="text" name="mobile_no"class="form-control"id="mobile"required placeholder="enter your phone no">
			     </div>
                </div>
				
				<div class="input-group">
				<label class="control-label col-lg-3 col-sm-4 col-md-4 col-4"for="email1">Email:</label>		
                <div class="input-group-append col-lg-8 col-sm-8 col-md-8 col-8">
                 <input type="email" name="email"class="form-control"id="email"required placeholder="enter your email">
			     </div>
                </div>
				
				<a href="adminprofile.php" id="profile" class="test1"><i class="fa fa-angle-double-left"></i></a>
				<input type="submit" name="submit" value="UPDATE PROFILE" class="btn">
				
				
				</form>
				
			
						  </form>
						

						 </div>
						 </div>
						 </div>

						 </div>
						 </div>
						 
						
						 </div>
						
						
						 <!--card part end-->
						 
						 
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
				 </script>
				
				<!-- Optional JavaScript -->
			   
			   <script src="popper.min.js"></script>
		
			   <script src="jquery.waypoints.min.js"></script>
			   <script src="jquery.counterup.min.js"></script>
			   
			   
			   
			   <script src="custom.js"></script>
			  
			  </body>
			</html>