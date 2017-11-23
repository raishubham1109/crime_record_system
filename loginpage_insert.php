<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_record_management";

$id = $_POST["offi-id"];
$designation = $_POST["designation"];
$email = $_POST["email"];
$password1 = $_POST["pass"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	
$check_q=mysqli_query($conn,"SELECT * FROM login WHERE id='$id' AND designation='$designation' AND email='$email' AND password='$password1'");
	
	if(mysqli_num_rows($check_q)==1){
		header('location:./aa.html');
		
	}
	else{
		echo "<script>alert('alert text')</script>";
		
    		  
	}

header('location:./letestloginpage.php?="wrong submission"');
	
	}

$conn->close();

?>