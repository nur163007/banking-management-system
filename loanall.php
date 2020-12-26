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
			while($output = mysqli_fetch_array($result)){  
			  ?>

						   <div class="balance">
                           <h6 class="text-dark"><span class="balance-left"><i class="fa fa-dollar"></i> Your Balance</span><span class="balance-right"><i class="fa fa-dollar"></i> <?php echo $output['amount'];?></span></h6>
                           </div>
						   <?php 
						   }

	                    ?>
						   
						   
						   <ul class="navbar-nav m-auto">

						   <li class="nav-item active mr-auto profileli">
                            <a class="nav-link text-dark" href="customerviewprofile.php"><i class="fa fa-user-o"></i> View Profile</a>
                           </li>
						   
						   <li class="nav-item mr-auto profileli">
                            <a class="nav-link text-dark" href="customerprofileupdate.php?account_no=<?php echo $_SESSION['account_no'];?>"><i class="fa fa-user-o"></i> Update Profile</a>
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
                            <a class="nav-link text-dark" href="payee.php#payees"><i class="fa fa-user-o"></i> Add Payee</a>
                           </li>
						   
						   <li class="nav-item mr-auto profileli">
                            <a class="nav-link text-dark" href="payeeinfo.php#info"><i class="fa fa-user-o"></i> All Payee</a>
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
                            <a class="nav-link text-dark" href="applycard.php#card"><i class="fa fa-cc-mastercard"></i> Apply Online</a>
                           </li>
						   
						   <li class="nav-item mr-auto profileli">
                            <a class="nav-link text-dark" href="showcard.php#show"><i class="fa fa-credit-card"></i> All cards</a>
                           </li>
						   
						    </ul>
							
						 </div>
						 
						 <div class="col-lg-8 col-12 contentoption"id="all">
						     <div class="container-fluid mt-3">
						 
						 <div class="account-request-payee col-12">
						 <h2 class="text-left text-danger">All applied loan</h2>
						 </div>
						 <!--account details part start -->
						 <input type="text" name="" class="form-control"id="myInput" onkeyup="searchFunction()"placeholder="Search by Date & Time">
						 <div class="aaccount-payee col-lg-12 col-12 mt-4 table-responsive">
						 <table class="table table-bordered" id="myTable">
						 <thead class="text-center bg-light text-success">
						 <th> Serial No</th>
				          <th>Loan type</th>
				          <th> Apply date</th>
				          <th> Amount</th>
				          <th> Duration</th>
				          <th> Status</th>
				          <th> Action</th>
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
      $phoneno = $_SESSION['phone_no'];
	  $sql ="select * from loan where phone_no = '$phoneno'";
	  $query = mysqli_query($conn,$sql);
      while($res = mysqli_fetch_array($query)) {

?>
			    <tbody>
				
			    <tr class="text-center bg-white">
				<td> <?php echo $res['serial_no'];?></td>
				<td> <?php echo $res['loan_type'];?></td>
				<td> <?php echo $res['apply_date'];?></td>
				<td> <?php echo '$'.$res['amount'];?></td>
				<td> <?php echo $res['term'];?></td>
				<td> <?php echo $res['status'];?></td>
				<td><a href="oneloan.php?serial_no=<?php echo $res['serial_no'];?>&&phone_no=<?php echo $res['phone_no'];?>"class="text-success"style="text-decoration:none;font-size:20px;"><i class="fa fa-eye text-success fa-2x"> </i></a></td>
				</tr>
			
				</tbody>
 <?php
	
	              }

             	?>

						 </table>
						 </div>
						 <!--account details part end-->
						 
						 
						
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
				
				<!-- Search option -->
				const searchFunction = () =>{
					let filter = document.getElementById('myInput').value.toUpperCase();
					let myTable = document.getElementById('myTable');
					let tr = myTable.getElementsByTagName('tr');
					for(var i=0; i<tr.length;i++){
						let td = tr[i].getElementsByTagName('td')[2];
						
						if (td){
							let textvalue = td.textContent || td.innerHTML;
							
							if(textvalue.toUpperCase().indexOf(filter) > -1){
								tr[i].style.display = "";
							}else{
								tr[i].style.display = "none";
							}
						}
					}
				}
				
				
				
				 </script>
				
				<!-- Optional JavaScript -->
			   
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   <script src="jquery.waypoints.min.js"></script>
			   <script src="jquery.counterup.min.js"></script>
			   
			   
			   
			   <script src="custom.js"></script>
			  
			  </body>
			</html>