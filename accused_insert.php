<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_record_management";

$accused_id = $_POST["accused_id"];
$crime_name = $_POST["crime_name"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$father_first_name= $_POST["fname"];
$father_last_name = $_POST["flname"];
$status = $_POST["status"];
$gender = $_POST["optradio"];
$age = $_POST["age"];
$mobile = $_POST["phonenum"];
$house_no = $_POST["house_no"];
$street = $_POST["street"];
$city = $_POST["city"];
$pincode = $_POST["pincode"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO accused_record(accused_id, crime_name, first_name, last_name, father_first_name, 
                                     father_last_name, status, gender, age, mobile, house_no, street, city,pincode) 
					VALUES('$accused_id', '$crime_name', '$first_name', '$last_name', '$father_first_name', 
                                     '$father_last_name', '$status', '$gender', '$age', '$mobile', '$house_no', '$street', '$city', '$pincode') ";

if ($conn->query($sql) === TRUE) {
    header('location:accused.php?message="Instered"');
	echo '<p> Inserted </p>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
