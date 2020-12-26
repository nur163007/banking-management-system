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
if(isset($_GET['transection_id'])){
	 $id= $_GET['transection_id'];
	 $phoneno= $_GET['phone_no'];
	  $sql ="DELETE FROM `transection` WHERE transection_id='$id' and phone_no ='$phoneno'";
	  $result = $conn->query($sql);
	  
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        header("location: statement.php");
    }
} else {
         header("location: statement.php");
      }
}
$conn->close();
?>