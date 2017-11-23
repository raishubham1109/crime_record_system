<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_record_management";

$victim_id = $_POST["victim-id"];
$crime_name = $_POST["crime_name"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$father_first_name= $_POST["fname"];
$father_last_name = $_POST["flname"];

$losses = $_POST["loss"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$mobile = $_POST["phones"];
$house_no = $_POST["house"];
$street = $_POST["street"];
$city = $_POST["city"];
$pincode = $_POST["pincode"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO victim_record(victim_id, crime_name, first_name, last_name, father_first_name, 
                                     father_last_name,losses, gender, age, mobile, house_no, street, city, pincode) 
					VALUES('$victim_id', '$crime_name', '$first_name', '$last_name', '$father_first_name', 
                                     '$father_last_name','$losses', '$gender', '$age', '$mobile', '$house_no', '$street', '$city', '$pincode') ";

if ($conn->query($sql) === TRUE) {
   header('location:victiminfo.php?message="Instered"');
	echo '<p> Inserted </p>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
