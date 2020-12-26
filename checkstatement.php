<?php
session_start(); 
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

						<li class="item"id="logout"><a href="logout.php"class="menu_btn"><i class="fa fa-power-off"></i><span> Logout</span></a></li>
						
						</div>
						</div>
				        <!-- sidebar ends-->
						
				
				         <!-- content part start-->
						 
				         <div class="content">
						 <div class="dashboard">
						 <h3><span><i class="fa fa-rocket"></i></span> Transection</h3>
						 </div>
		
						 <div class="dashboard_home">
						 <h4><span ><a href="dashboard.php"><i class="fa fa-home i-items"></i> <span class="hidden-menu">Home</span></a></span>&nbsp &nbsp<span ><a href="checktransection.php"><i class="fa fa-rocket i-items"></i> <span class="hidden-menu">Transection</span></a>&nbsp &nbsp<span ><a href="adminstatement.php"><i class="fa fa-list i-items"></i> <span class="hidden-menu"> Statement History</span></a></span>&nbsp &nbsp<i class="fa fa-list i-items"></i> <span class="hidden-menu">Transection Details</span></h4>
						 </div>
						 
						 <div class="container-fluid mt-3">
						 
						 <!--deposit details part start-->
						 
						 <div class="account-details col-12">
						 <h2 class="text-left text-success">Transection Information</h2>
						 </div>
						 <div class="aaccount-account col-lg-12 col-12 mt-4 table-responsive">
						 <table class="table table-striped">
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

	  $transect_no=$_GET['transection_id'];
	  $sql ="select * from transection where transection_id=$transect_no";
	  $query_run= mysqli_query($conn,$sql);
      while($row = mysqli_fetch_array($query_run)) {
		  $remark = $row['remark'];
		  
		  if($remark == "deposit"){
			  
	  $remarkdeposit ="select * from transection where remark='deposit' and transection_id='$transect_no'";
	  $query= mysqli_query($conn,$remarkdeposit);
      while($remarkadd = mysqli_fetch_array($query)){
		  $tranno=$remarkadd['transection_no'];
		  
		  $selacc="select * from customer_fund where transection_no='$tranno'";
		  $acc =mysqli_query($conn, $selacc);
		  while($remarkacc = mysqli_fetch_array($acc)){

?>	
 <tbody class="table-bordered ">
			    
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-keyboard-o"></i> Deposit Account No</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkacc['account_no'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-keyboard-o"></i> Transection ID</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkadd['transection_id'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-calendar"></i> Transection Date</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkadd['date'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-list"></i> Action</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkadd['remark'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-money"></i> Deposit Balance</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkadd['credit'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-dollar"></i> New Total Balance</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkadd['balance'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-mobile-phone"></i> Phone No</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkadd['phone_no'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-list"></i> Term</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkadd['term'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-check-square-o"></i> Status</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkadd['deposit'];?></span></td>
				</tr>
				
			    <tr class="text-left bg-white detailsbutton">
				<td>
				<a href="adminstatement.php"class="text-danger col-12"><i class="fa fa-arrow-left text-danger"> </i> Back</a>
				</td>
				
				</tr>
			     
				</tbody>
				 <?php
	
	              }
	              }
	              }
				  
				 else if($remark == "transfer"){
			  
	  $remarktran ="select * from transection where remark='transfer' and transection_id='$transect_no'";
	  $querytran= mysqli_query($conn,$remarktran);
      while($remarktransfer = mysqli_fetch_array($querytran)) {
		  $tranno=$remarktransfer['transection_no'];
		  
		  $selacc="select * from customer_fund where transection_no='$tranno'";
		  $acc =mysqli_query($conn, $selacc);
		  while($remarkacc = mysqli_fetch_array($acc)){

?>	
 <tbody class="table-bordered ">
			    
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-keyboard-o"></i> Sender Account No</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkacc['account_no'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-keyboard-o"></i> Transection ID</span><span class="tableright col-lg-7 col-7">: <?php echo $remarktransfer['transection_id'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-calendar"></i> Transection Date</span><span class="tableright col-lg-7 col-7">: <?php echo $remarktransfer['date'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-list"></i> Action</span><span class="tableright col-lg-7 col-7">: <?php echo $remarktransfer['remark'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-money"></i> Transfer Balance</span><span class="tableright col-lg-7 col-7">: <?php echo $remarktransfer['debit'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-dollar"></i> New Total Balance</span><span class="tableright col-lg-7 col-7">: <?php echo $remarktransfer['balance'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-mobile-phone"></i> Phone No</span><span class="tableright col-lg-7 col-7">: <?php echo $remarktransfer['phone_no'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-keyboard-o"></i> Receiver Account No</span><span class="tableright col-lg-7 col-7">: <?php echo $remarktransfer['payee_account_no'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-check-square-o"></i> Status</span><span class="tableright col-lg-7 col-7">: <?php echo $remarktransfer['transfer'];?></span></td>
				</tr>
				
			    <tr class="text-left bg-white detailsbutton">
				<td>
				<a href="adminstatement.php"class="text-danger col-12"><i class="fa fa-arrow-left text-danger"> </i> Back</a>
				</td>
				
				</tr>
			     
				</tbody>
				 <?php
	
	              }
	              }
	              }
				  				  
				 else if($remark == "withdrawl"){
			  
	  $remarkwith ="select * from transection where remark='withdrawl' and transection_id='$transect_no'";
	  $querywith= mysqli_query($conn,$remarkwith);
      while($remarkwithdraw = mysqli_fetch_array($querywith)) {
		  $withno=$remarkwithdraw['transection_no'];
		  
		  $selacc="select * from customer_fund where transection_no='$withno'";
		  $acc =mysqli_query($conn, $selacc);
		  while($remarkacc = mysqli_fetch_array($acc)){

?>	
 <tbody class="table-bordered ">
			    
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-keyboard-o"></i> Account No</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkacc['account_no'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-keyboard-o"></i> Transection ID</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkwithdraw['transection_id'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-calendar"></i> Withdrawl Date</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkwithdraw['date'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-list"></i> Action</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkwithdraw['remark'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-money"></i> Withdrawl Balance</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkwithdraw['debit'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-dollar"></i> New Total Balance</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkwithdraw['balance'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-mobile-phone"></i> Phone No</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkwithdraw['phone_no'];?></span></td>
				</tr>
				
			
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-check-square-o"></i> Status</span><span class="tableright col-lg-7 col-7">: <?php echo $remarkwithdraw['withdrawl'];?></span></td>
				</tr>
				
			    <tr class="text-left bg-white detailsbutton">
				<td>
				<a href="adminstatement.php"class="text-danger col-12"><i class="fa fa-arrow-left text-danger"> </i> Back</a>
				</td>
				
				</tr>
			     
				</tbody>
				 <?php
	
	              }
	              }
	              }
				  
				  
	              }

             	?>

						 </table>
						 </div>
						 <!--deposit details part end-->
						
						 
						
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
			   <script src="bootstrap.min.js"></script>
			   <script src="jquery.waypoints.min.js"></script>
			   <script src="jquery.counterup.min.js"></script>
			   
			   
			   
			   <script src="custom.js"></script>
			  
			  </body>
			</html>