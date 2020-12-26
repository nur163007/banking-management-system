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
if(isset($_GET['payee_account_no'])){
	 $payeeid= $_GET['payee_account_no'];
	 $phoneno= $_GET['phone_no'];
	 $sl_no= $_GET['serial_no'];
	  $sql ="DELETE FROM `payee` WHERE payee_account_no='$payeeid' and phone_no ='$phoneno' and serial_no='$sl_no'";
	  $result = $conn->query($sql);
	  
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        header("location: payeeinfo.php");
    }
} else {
         header("location: payeeinfo.php");
      }
}
$conn->close();
?>