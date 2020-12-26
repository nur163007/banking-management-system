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
	           $sql ="update card set status='Approved' where s_no='$slno'";
	           $query = mysqli_query($conn,$sql);
			   if($query){
				   header("location: cardstatement.php");
			   }
			   
?>