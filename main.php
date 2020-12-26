<?php

session_start();
include 'meeting.php';
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
			  <li> <a href="#"id="profile"><i class="fa fa-user"></i></a></li>
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
						<a href="#"><i class="fa fa-edit"></i><span> Active Loan</span></a>
						<a href="#"><i class="fa fa-edit"></i><span> Loan Request</span></a>
						<a href="#"><i class="fa fa-database"></i><span> All Loan</span></a>
						</div>
						</li>
						
						<li class="item" id="card"><a href="card.php#card"class="menu_btn"><i class="fa fa-credit-card-alt"></i><span> Debit/Credit Card<i class="fa fa-chevron-down dropdown"></i></span></a>
						<div class="sub_menu">
						<a href="#"><i class="fa fa-cc-mastercard"></i><span> Card Request</span></a>
						<a href="#"><i class="fa fa-cc-mastercard"></i><span> All Cards</span></a>
						</div>
						</li>
						
						
						<li class="item" id="transect"><a href="checktransection.php#transect"class="menu_btn"><i class="fa fa-rocket"></i><span> Transection<i class="fa fa-chevron-down dropdown"></i></span></a>
						<div class="sub_menu">
						<a href="#"><i class="fa fa-rocket"></i><span> Deposit</span></a>
						<a href="#"><i class="fa fa-rocket"></i><span> Transfer</span></a>
						<a href="#"><i class="fa fa-rocket"></i><span> Withdrawl</span></a>
						<a href="#"><i class="fa fa-rocket"></i><span> Statement</span></a>
						</div>
						</li>
						
						<li class="item"id="meeting"><a href="#" class="menu_btn"><i class="fa fa-handshake-o"></i><span> Create a Meeting</span></a></li>
						
						
						<li class="item"id="logout"><a href="logout.php"class="menu_btn"><i class="fa fa-power-off"></i><span> Logout</span></a></li>
						
						</div>
						</div>
				        <!-- sidebar ends-->
						
				
				         <!-- content part start-->
						 
				         <div class="content">
						 
						 
						 <div class="dashboard">
						 <h3><span><i class="fa fa-dashboard"></i></span> Dashboard</h3>
						 </div>
              
			                  <!--meeting part start -->
			  <div class="login-container" id="login_container">
			  
			   <form action=""method="post" enctype="multipart/form-data">
			   <div class="page top slidepage" id="toppart">
			   <div class="titletext">
			   <a href="#" id="crossprofile"style="padding:0 10px;font-size:30px;"><i class="fa fa-times-circle text-danger"></i></a>
			    <h3 class="text-center text-danger mb-3">BMS Meeting</h3>
			   </div> 
			   <div class="row">
			   <div class="input-div col-lg-12 col-12">
			   <div class="i">
			   <i class="fa fa-calendar"></i>
			   </div>
			   <div>
			   <h5>Date of Meeting<span class="text-danger"id="errorDate"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="datepicker"name="date" autocomplete="off" placeholder="Enter meeting date"required>
			   
			   </div>
			   </div>
			   
			   <div class="input-div col-lg-12 col-12">
			   <div class="i">
			   <i class="fa fa-calendar"></i>
			   </div>
			   <div>
			   <h5>Day<span class="text-danger"id="errorDay"style="font-size:12px;margin-left:15px;"></span></h5>
			    <select id="day"name="day"required>
                       <option value=""selected="selected">--Select a Day--</option>
                       <option value="Saturday">Saturday</option>
                       <option value="Sunday">Sunday</option>
                       <option value="Monday">Monday</option>
                       <option value="Tuesday">Tuesday</option> 
                       <option value="Wednesday">Wednesday</option> 
                       <option value="Thursday">Thursday</option> 
                       <option value="Friday">Friday</option> 
                 </select>
			   </div>
			   </div>
			   
			   
			   <div class="input-div col-lg-12 col-12">
			   <div class="i">
			   <i class="fa fa-clock-o"></i>
			   </div>
			   <div>
			   <h5>Time<span class="text-danger"id="errorTime"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="time"name="time"  autocomplete="off" placeholder="Enter Meeting time" required>
			   
			   </div>
			   </div>
			   
			   
			   <div class="input-div col-lg-12 col-12">
			   <div class="i">
			   <i class="fa fa-external-link"></i>
			   </div>
			   <div>
			   <h5>Meeting Link<span class="text-danger"id="errorDob"style="font-size:12px;margin-left:15px;"></span></h5>
			   <input type="text"class="input"id="link"name="link"  autocomplete="off" placeholder="Enter Meeting Link" required>
			   </div>
			   </div>
			   			   
			   </div>
			   
			   <div class="col-lg-3 col-6 NextBtn">
			   <input type="submit" name="submit" value="Send Email" class="btn-button"/>
			   </div>
			   </div>

			   </form>
			  </div>
			  
			          <!--meeting part end -->
		
						 <div class="dashboard_home">
                        <h4><span ><a href="dashboard.php"><i class="fa fa-home i-items"></i> <span class="hidden-menu">Home</span></a></span>&nbsp &nbsp<i class="fa fa-dashboard i-items"></i> <span class="hidden-menu">Dashboard</span></h4>
						</div>
						 
						 <div class="container mt-5">
						 
						 <!--card part start -->
						 
						 <div class="row">
						 
						  <!--card1 -->
						  
						 <div class="col-lg-3 col-12">
						 <div class="card text-center"> 
						 
						 <div class="card-header bg-white text-dark">
						 <div class="row align-items-center">
						 
						 <div class="col dashboard-top one">
						 <i class="fa fa-users fa-3x"></i>
						 </div>
						 
						 <div class="col">
						 <h6>Accounts</h6>
						<h3 class="display-4">05</h3>
						
						 </div>
						 </div>
						 </div>
						 <div class="card-footer bg-white">
						 <h6><a href="account.php"class="text-primary">View Details <i class="fa fa-arrow-circle-right"></i></a></h6>
						 </div>
						 </div>
						 </div>
						 
						 <!--card2 -->
						 
						 <div class="col-lg-3 col-12">
						 <div class="card text-center"> 
						 
						 <div class="card-header bg-white text-success">
						 <div class="row align-items-center">
						 
						 <div class="col dashboard-top two">
						 <i class="fa fa-database fa-3x"></i>
						 </div>
						 
						 <div class="col">
						 <h6>Loan</h6>
						<h3 class="display-4">03</h3>
						
						 </div>
						 </div>
						 </div>
						 <div class="card-footer bg-white">
						 <h6><a href="loan.php"class="text-success">View Details <i class="fa fa-arrow-circle-right"></i></a></h6>
						 </div>
						 </div>
						 </div>
						 
						 <!--card3 -->
						 
						 <div class="col-lg-3 col-12">
						 <div class="card text-center"> 
						 
						 <div class="card-header bg-white text-warning">
						 <div class="row align-items-center">
						 
						 <div class="col dashboard-top three">
						 <i class="fa fa-cc-mastercard fa-3x"></i>
						 </div>
						 
						 <div class="col">
						 <h6>Cards</h6>
						<h3 class="display-4">02</h3>
						
						 </div>
						 </div>
						 </div>
						 <div class="card-footer bg-white">
						 <h6><a href="card.php"class="text-dark">View Details <i class="fa fa-arrow-circle-right"></i></a></h6>
						 </div>
						 </div>
						 </div>
						 
						 <!--card4 -->
						 
						 <div class="col-lg-3 col-12">
						 <div class="card text-center"> 
						 
						 <div class="card-header bg-white text-success">
						 <div class="row align-items-center">
						 
						 <div class="col dashboard-top one">
						 <i class="fa fa-rocket fa-3x"></i>
						 </div>
						 
						 <div class="col">
						 <h6>Transection</h6>
						<h3 class="display-4">04</h3>
						
						 </div>
						 </div>
						 </div>
						 <div class="card-footer bg-white">
						 <h6><a href="checktransection.php"class="text-info">View Details <i class="fa fa-arrow-circle-right"></i></a></h6>
						 </div>
						 </div>
						 </div>
						 
						 <!--card5 -->

						 </div>
						
						
						 <!--card part end-->
						 
						 
						 </div>
						 
						 </div>
		
				         <!-- content part end-->
				
				
				<!-- loader part start-->
				<div class="loader">
				<h1 class="text-center text-white loaderfile">Welcome to Bank Management System</h1>
				<p class="text-center text-white p-4">Please wait a few seconds....</p>
				<img src="loading.gif"alt="loading...."/>
				</div>
                 <script type="text/javascript">
				 window.addEventListener("load",function(){
				 const loader=document.querySelector(".loader");
				 loader.className+=" hidden";
				 });
				 
				 
				          // meeting part start
				 
				 $(document).ready(function(){
				  $('#datepicker').datepicker({
					  dateFormat: "dd-mm-yy",
					  changeMonth:true,
					  changeYear:true
				  });
			  })
			  
			  $(document).ready(function(){
	              $("#meeting").click(function(){
		             $("#login_container").show();
	                   });
					   });
					   
					   $(document).ready(function(){
	              $("#crossprofile").click(function(){
		             $("#login_container").hide();
	                   });
					   });
			  
				 </script>
				
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
			   <script src="jquery-ui.min.js"></script>
			   
			   
			   <script src="custom.js"></script>
			  
			  </body>
			</html>