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
if(isset($_GET['serial_no'])){
	 $serialno= $_GET['serial_no'];
	 $phoneno= $_GET['phone_no'];
	  $sql ="DELETE FROM `loan` WHERE serial_no='$serialno'";
	  $result = $conn->query($sql);
	  
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        header("location: loanall.php");
    }
} else {
         header("location: loanall.php");
      }
}
$conn->close();
?>