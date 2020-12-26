<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bms";
$conn= new mysqli($servername, $username, $password,$dbname);

$id=$_GET['employee_id'];
$token=$_GET['token'];

$update = "UPDATE registration SET status = 'active' WHERE token = '$token'";
$result = mysqli_query($conn,$update);
if($result){
	echo '<script>alert("Your account is verified now you can login to your account");</script>';
	//header("location:loginres.php");
}
else{
	echo '<script>alert("verification failed");</script>';
	
}

?>