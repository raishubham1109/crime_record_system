<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_record_management";


$crime_name = $_POST["crime_name"];
$status = $_POST["status"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE crime_record SET status_of_crime='$status' WHERE crime_name='$crime_name'";

if ($conn->query($sql) === TRUE) {
     header('location:crime_update.php?message="Instered"');
	echo '<p> Updated </p>';
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>