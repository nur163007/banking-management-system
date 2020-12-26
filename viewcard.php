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
						 <h3><span><i class="fa fa-vcard-o"></i></span> Card</h3>
						 </div>
		
						 <div class="dashboard_home">
						 <h4><span ><a href="dashboard.php"><i class="fa fa-home i-items"></i> <span class="hidden-menu">Home</span></a></span>&nbsp &nbsp<span ><a href="card.php"><i class="fa fa-vcard-o i-items"></i> <span class="hidden-menu">Card</span></a>&nbsp &nbsp<span ><a href="checkcard.php"><i class="fa fa-user-plus i-items"></i> <span class="hidden-menu">New Card Request</span></a></span>&nbsp &nbsp<i class="fa fa-list i-items"></i> <span class="hidden-menu">Card Details</span></h4>
						 </div>
						 
						 <div class="container-fluid mt-3">
						 
						 <div class="account-details col-12">
						 <h2 class="text-left text-success">Customer details</h2>
						 </div>
						 <!--account details part start -->
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

	  $slno=$_GET['s_no'];
	  $sql ="select * from card where s_no=$slno";
	  $query_run= mysqli_query($conn,$sql);
      while($res = mysqli_fetch_array($query_run)) {
		  $acc =$res['account_no'];
	   
         $search ="select * from customer_account where account_no='$acc'";	 
          $success= mysqli_query($conn, $search);	
          while($row=mysqli_fetch_array($success)){		  
		  

?>	
			    <tbody class="table-bordered ">
			    <tr class="text-left bg-white">
				<td > <img src="phpimage/<?php echo $row['file'];?>"style="width:110px;height:120px;border-radius:3px;margin-left:30px;"></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-user-o"></i> Customer Name</span><span class="tableright col-lg-7 col-7">: <?php echo $row['customer_name'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-calendar-o"></i> Date of birth</span><span class="tableright col-lg-7 col-7">: <?php echo $row['date_of_birth'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-phone text-dark"></i> Phone no</span><span class="tableright col-lg-7 col-7">: <?php echo $row['phone_no'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-envelope-o"></i> Email</span><span class="tableright col-lg-7 col-7">: <?php echo $row['email'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-map-marker text-dark"></i> Address</span><span class="tableright col-lg-7 col-7">: <?php echo $row['address'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-map-o"></i> City</span><span class="tableright col-lg-7 col-7">: <?php echo $row['city'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-qrcode"></i> Post code</span><span class="tableright col-lg-7 col-7">: <?php echo $row['post_code'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-mars"></i> Gender</span><span class="tableright col-lg-7 col-7">: <?php echo $row['gender'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-venus-mars"></i> Maritial status</span><span class="tableright col-lg-7 col-7">: <?php echo $row['maritial_status'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-registered"></i> Religion</span><span class="tableright col-lg-7 col-7">: <?php echo $row['religion'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-book"></i> Education</span><span class="tableright col-lg-7 col-7">: <?php echo $row['educational_qualification'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-universal-access"></i> Senior citizen</span><span class="tableright col-lg-7 col-7">: <?php echo $row['citizen'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-user-circle"></i> Existing account</span><span class="tableright col-lg-7 col-7">: <?php echo $row['existing_account'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-money"></i> Income</span><span class="tableright col-lg-7 col-7">: <?php echo $row['income'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-vcard-o"></i> Account type</span><span class="tableright col-lg-7 col-7">: <?php echo $row['account_type'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-keyboard-o"></i> Account no</span><span class="tableright col-lg-7 col-7">: <?php echo $row['account_no'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-rocket"></i> Service</span><span class="tableright col-lg-7 col-7">: <?php echo $row['service'];?></span></td>
				</tr>
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-edit"></i> Status</span><span class="tableright col-lg-7 col-7">: <?php echo $row['status'];?></span></td>
				</tr>
						     
				</tbody>
				 </table>
				 
				 <div class="account-details col-12">
						 <h2 class="text-left text-success">Card details</h2>
						 </div>
				 <div class="aaccount-account col-lg-12 col-12 mt-4 table-responsive">
				 <table class="table table-striped">
				
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-vcard-o"></i> Serial no</span><span class="tableright col-lg-7 col-7">: <?php echo $res['s_no'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-keyboard-o"></i> Card Number</span><span class="tableright col-lg-7 col-7">: <?php echo $res['card_no'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-vcard-o"></i> Card type</span><span class="tableright col-lg-7 col-7">: <?php echo $res['card_type'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-dollar"></i> Card limit</span><span class="tableright col-lg-7 col-7">: <?php echo $res['card_limit'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-calendar-o"></i> Apply Date</span><span class="tableright col-lg-7 col-7">: <?php echo $res['apply_date'];?></span></td>
				</tr>
				<tr class="text-left bg-white">
				<td><span class="tableleft col-lg-5 col-5"><i class="fa fa-check-square-o"></i> Status</span><span class="tableright col-lg-7 col-7">: <?php echo $res['status'];?></span></td>
				</tr>
				<tr class="text-left bg-white detailsbutton">
				<td>
				<a href="updatecard.php?s_no=<?php echo $res['s_no'];?>"class="text-success col-12"><i class="fa fa-check-square-o text-success"> </i> Approved</a>
				<a href="checkcard.php"class="text-danger col-12"><i class="fa fa-arrow-left text-danger"> </i> Back</a>
				</td>
				
				</tr>		 
				</table>
						 
				 
				 <?php
	
	              }
	              }

             	?>
 
 						
						 
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