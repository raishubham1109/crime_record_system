<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_record_management";

$accused_id = $_POST["accused_id"];
$crime_name = $_POST["crime_name"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$status = $_POST["status"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE accused_record SET status='$status' WHERE accused_id='$accused_id' AND crime_name='$crime_name'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

if($status == 'guilty')
{
	$sql = "INSERT INTO aressted(accused_id,crime_name,first_name,last_name) VALUES ('$accused_id','$crime_name','$first_name','$last_name')";
    if ($conn->query($sql) === TRUE) {
     header('location:accused_update.php?message="Instered"');
	echo '<p> Update</p>';
    } else {
    echo "Error updating record: " . $conn->error;
}

}

$conn->close();
?>