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
						 <h3><span><i class="fa fa-user-o"></i></span> Accounts</h3>
						 </div>
		
						 <div class="dashboard_home">
						 <h4><span ><a href="dashboard.php"><i class="fa fa-home i-items"></i> <span class="hidden-menu">Home</span></a></span>&nbsp &nbsp<span ><a href="account.php"><i class="fa fa-users i-items"></i> <span class="hidden-menu">Accounts</span></a></span>&nbsp &nbsp<i class="fa fa-list i-items"></i> <span class="hidden-menu">Account Details</span></h4>
						 </div>
						 
						 <div class="container-fluid mt-3">
						 
						 <div class="account-details col-12">
						 <h2 class="text-left text-success">Account details</h2>
						 </div>
						 <div class="searchoption">
				          <form action="" method="post">
						  <div class="row">
						  <div class="form-group col-lg-4 offset-lg-4 col-10 offset-1  bg-white mt-3">
				          <input type="text" class="form-control text-center"name="account_no" placeholder="Enter Account Number">
				          </div>
						  <div class="col-lg-4 offset-lg-4 col-12 text-center">
						  <input type="submit" name="search" value="Search"class="btnsearch">
						  </div>
						  </div>
				          </form>
				         </div>
						 <!--account details part start -->
						 <div class="aaccount-account col-lg-12 col-12 mt-4 table-responsive">
						 <table class="table table-striped">
						 <thead class="text-center bg-dark text-white">
						 <th>Profile</th>
						 <th>Customer Name</th>
						 <th>Phone no</th>
						 <th>Address</th>
						 <th>Account type</th>
						 <th>Status</th>
						 <th>Action</th>
						 </thead> 
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
if(isset($_POST['search'])){
	  $accountno=$_POST['account_no'];
	  $sql ="select * from customer_account where account_no=$accountno";
	  $query_run= mysqli_query($conn,$sql);
      while($user = mysqli_fetch_array($query_run)) {
		  

?>	
			    <tbody>
				
			   <tr class="text-center bg-white">
				<td > <img src="phpimage/<?php echo $user['file'];?>"style="width:80px;height:85px;"></td>
				<td> <?php echo $user['customer_name'];?></td>
				<td> <?php echo $user['phone_no'];?></td>
				<td> <?php echo $user['address'];?></td>
				<td> <?php echo $user['account_type'];?></td>
				<td> <?php echo $user['status'];?></td>
				<td><a href="customerdetails.php?account_no=<?php echo $user['account_no'];?>"class="text-success"style="text-decoration:none;font-size:20px;"><i class="fa fa-edit text-success fa-2x"> </i></a></td>
				
				</tr>
			
				</tbody>
				 <?php
	
	              }
}
             	?>

						 </table>
						 
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
				 </script>
				
				<!-- Optional JavaScript -->
			   
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   <script src="jquery.waypoints.min.js"></script>
			   <script src="jquery.counterup.min.js"></script>
			   
			   
			   
			   <script src="custom.js"></script>
			  
			  </body>
			</html>