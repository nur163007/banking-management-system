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
	 $payeename = $_POST['payee_name'];
	 $payeeid = $_POST['payee_account_no'];
	 $remark = $_POST['remark'];
	$token = $_SESSION['phone_no'];
	  
	  

	$query="select * from payee where payee_account_no='$payeeid'";
	$pquery=mysqli_query($conn,$query);
	$accountcount=mysqli_num_rows($pquery);
     
	 while($row = mysqli_fetch_array($pquery)){
		$_SESSION['payee_name'] = $row['payee_name'];
		$_SESSION['payee_account_no'] = $row['payee_account_no'];
		$_SESSION['remark'] = $row['remark'];
		$_SESSION['token'] = $row['phone_no'];
	 }

		$sql ="INSERT INTO payee (payee_name,payee_account_no,remark,phone_no) VALUES ('$payeename','$payeeid','$remark','$token')";			  
			  
         $result=mysqli_query($conn,$sql);
			  
			  if($result == true){
				
                echo '<script>alert ("Succesfully add payee")</script>';
               echo '<script>window.location="payeeinfo.php"</script>';
                      
				
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
						 
						 <div class="col-lg-8 col-12 contentoption" id="payees">
						 <form action=""method="post">
						 
						 <div class="payee-form col-lg-4 col-12">
						 <h2 class="payee-head">Add Payee</h2>
						 </div>
						 <div class="row">
						 <div class="input-payee col-lg-10 col-12 offset-lg-1 mt-3">
						 <input type="text"class="form-control"name="payee_name"placeholder="Payee Name">
						 </div>
						 
						 <div class="input-payee col-lg-10 col-12 offset-lg-1 mt-3">
						 <input type="text"class="form-control"name="payee_account_no"placeholder="Payee Account Number">
						 </div>
						 
						 <div class="input-payee col-lg-10 col-12 offset-lg-1 mt-3">
						 <input type="text"class="form-control"name="remark"placeholder="Remark">
						 </div>
						 
						 <div class="input-btn col-lg-3 col-12 offset-lg-5 mt-3">
						 <input type="submit"class="submit-button"name="submit"value="Submit">
						 </div>
						 
						 
						 </div>
						 					 
						 </form>

						 
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
				 </script>
				
				<!-- Optional JavaScript -->
			   
			   <script src="popper.min.js"></script>
			   <script src="bootstrap.min.js"></script>
			   <script src="jquery.waypoints.min.js"></script>
			   <script src="jquery.counterup.min.js"></script>
			   
			   
			   
			   <script src="custom.js"></script>
			  
			  </body>
			</html>