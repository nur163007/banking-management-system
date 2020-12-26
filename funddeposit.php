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
	$phoneno =$_SESSION['phone_no'];
	 $accountno = $_POST['account_no'];
	 $cname = $_POST['customer_name'];
	 $branch = $_POST['branch'];
	 $deposittype = $_POST['account_type'];
	 $term = $_POST['term'];
	 $remark = $_POST['remark'];
	 $money = $_POST['amount'];
	 $debit = "0";
	 
	 $status ="Pending";

	
	$query="select account_no,customer_name,account_type from customer_account where account_no='$accountno'";
	$pquery=mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($pquery)){
     
	 $caccount = $row['account_no'];
	 $name = $row['customer_name'];
	 $deposit = $row['account_type'];
	 if($accountno== $caccount && $cname== $name && $deposittype == $deposit){
		 $foradd ="select * from customer_fund where account_no='$accountno'";
	    $addsum=mysqli_query($conn,$foradd);
			  while($addition = mysqli_fetch_array($addsum)){
		     $statuscheck =$addition['deposit'];
			 $transectno =$addition['transection_no'];
				 
			       $sum = $addition['amount'];
				   $total =0;
				   $transfer ="N/A";
				   $withdrawl ="N/A";
				   $amount = $total+$sum+$money;
			 
		   $updatestatus ="update customer_fund set deposit='$status',remark='$remark',branch='$branch' where account_no='$accountno'";
			$successstatus = mysqli_query($conn, $updatestatus);
		           echo '<script>alert ("Request Sent for Deposit balance, confirmation sent to your email within 1/2 working days.")</script>';
				   if($successstatus == true){
   
			$update ="update customer_fund set amount='$amount', term ='$term' where account_no='$accountno'";

				
				$totalbalance = $amount - $debit; 
				$transection="INSERT INTO transection(remark,debit,credit,balance,phone_no,term,deposit,transfer,withdrawl,transection_no) VALUES('$remark','$debit','$money','$totalbalance','$phoneno','$term','$status','$transfer','$withdrawl','$transectno')";
				$transect = mysqli_query($conn, $transection);
				
               echo '<script>window.location="statement.php"</script>';
		  

}
}
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
						   
						   <li class="nav-item mr-auto profileli">
                            <a class="nav-link text-dark" href="#" id="calclick"><i class="fa  fa-calculator"></i> Calculator</a>
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
						 
						 <div class="col-lg-8 col-12 contentoption" id="deposit">
						 
						 <!-- calculator part start-->
						    <div class="calculator">
  <p><a href="#"id="cross"><i class="fa fa-times-circle"></i></a></p>
  <div class="calc-row">
    <div class="screen">0123456789</div>
  </div>
  
  <div class="calc-row">
    <div class="button">C</div><div class="button">CE</div><div class="button backspace">back</div><div class="button plus-minus">+/-</div><div class="button">%</div>
  </div>
  
  <div class="calc-row">
    <div class="button">7</div><div class="button">8</div><div class="button">9</div><div class="button divice">/</div><div class="button root">sqrt</div>
  </div>
  
  <div class="calc-row">
    <div class="button">4</div><div class="button">5</div><div class="button">6</div><div class="button multiply">*</div><div class="button inverse">1/x</div>
  </div>
  
  <div class="calc-row">
    <div class="button">1</div><div class="button">2</div><div class="button">3</div><div class="button">-</div><div class="button pi">pi</div>
  </div>
  
  <div class="calc-row">
    <div class="button zero">0</div><div class="button decimal">.</div><div class="button">+</div><div class="button equal">=</div>
  </div>
</div>
							 <!-- calculator part end-->
							 
							 
						 <form action=""method="post">
						 
						 <div class="payee-form col-lg-8 col-12">
						 <h2 class="payee-head">Fund Deposit Part</h2>
						 </div>
						 <div class="row">
						 
						 <div class="input-payee col-lg-10 col-12 offset-lg-1 mt-3">
						 <input type="text"class="form-control"name="customer_name"placeholder="Enter Customer Name">
						 </div>
						 
						 <div class="input-payee col-lg-10 col-12 offset-lg-1 mt-3">
						 
						<select id="branch"name="branch"class="form-control">
                      
                       <option value=""selected="selected">--Select a Branch--</option>
                       <option value="Mohakhali Branch">Mohakhali Branch</option>
                       <option value="Banani Branch">Banani Branch</option>
                       <option value="Gulshan Branch">Gulshan Branch</option>
                       <option value="Mirpur Branch">Mirpur Branch</option>
                       <option value="Uttara Branch">Uttara Branch</option>
                
                         </select>
						</div>
						
						<div class="input-payee col-lg-10 col-12 offset-lg-1 mt-3">
						 <input type="text"class="form-control"name="account_no"placeholder="Enter Account Number">
						 </div>
						 
						 <div class="input-payee col-lg-10 col-12 offset-lg-1 mt-3">
						 <input type="text"class="form-control"name="account_type"placeholder="Enter Deposit Type">
						 </div>
						 
						 <div class="input-payee col-lg-10 col-12 offset-lg-1 mt-3">
						 <input type="text"class="form-control"name="term"placeholder="Enter Term">
						 </div>
						 
						 
						 <div class="input-payee col-lg-10 col-12 offset-lg-1 mt-3">
						 <input type="text"class="form-control"name="amount"placeholder="Enter Amount">
						 </div>
						 
						 <div class="input-payee col-lg-10 col-12 offset-lg-1 mt-3">
						 <input type="text"class="form-control"name="remark"value="deposit" readonly>
						 </div>
						 
						 
						 <div class="input-btn col-lg-4 col-12 offset-lg-4 mt-3">
						 <input type="submit"class="submit-button"name="submit"value="Fund Deposit">
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
				
				
				// calculator part start--
				
				$(document).ready(function(){
	              $("#calclick").click(function(){
		             $(".calculator").show();
		               });
					   });
					   
					   $(document).ready(function(){
	              $("#cross").click(function(){
		             $(".calculator").hide();
		               });
					   });
					   
					   $(document).ready(function() {
  var result = 0;
  var prevEntry = 0;
  var operation = null;
  var currentEntry = '0';
  updateScreen(result);
  
  $('.button').on('click', function(evt) {
    var buttonPressed = $(this).html();
    console.log(buttonPressed);
    
    if (buttonPressed === "C") {
      result = 0;
      currentEntry = '0';
    } else if (buttonPressed === "CE") {
      currentEntry = '0';
    } else if (buttonPressed === "back") {
      currentEntry = currentEntry.substring(0, currentEntry.length-1);
    } else if (buttonPressed === "+/-") {
      currentEntry *= -1;
    } else if (buttonPressed === '.') {
      currentEntry += '.';
    } else if (isNumber(buttonPressed)) {
      if (currentEntry === '0') currentEntry = buttonPressed;
      else currentEntry = currentEntry + buttonPressed;
    } else if (isOperator(buttonPressed)) {
      prevEntry = parseFloat(currentEntry);
      operation = buttonPressed;
      currentEntry = '';
    } else if(buttonPressed === '%') {
      currentEntry = currentEntry / 100;
    } else if (buttonPressed === 'sqrt') {
      currentEntry = Math.sqrt(currentEntry);
    } else if (buttonPressed === '1/x') {
      currentEntry = 1 / currentEntry;
    } else if (buttonPressed === 'pi') {
      currentEntry = Math.PI;
    } else if (buttonPressed === '=') {
      currentEntry = operate(prevEntry, currentEntry, operation);
      operation = null;
    }
    
    updateScreen(currentEntry);
  });
});

updateScreen = function(displayValue) {
  var displayValue = displayValue.toString();
  $('.screen').html(displayValue.substring(0, 10));
};

isNumber = function(value) {
  return !isNaN(value);
}

isOperator = function(value) {
  return value === '/' || value === '*' || value === '+' || value === '-';
};

operate = function(a, b, operation) {
  a = parseFloat(a);
  b = parseFloat(b);
  console.log(a, b, operation);
  if (operation === '+') return a + b;
  if (operation === '-') return a - b;
  if (operation === '*') return a * b;
  if (operation === '/') return a / b;
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