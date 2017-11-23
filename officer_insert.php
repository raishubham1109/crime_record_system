<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_record_management";

$officer_id = $_POST["officer_id"];
$crime_name = $_POST["crime_name"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$father_first_name= $_POST["father_first_name"];
$father_last_name = $_POST["father_last_name"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$mobile = $_POST["mobile"];
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

$sql = "INSERT INTO investigating_officer(officer_id, crime_name ,  first_name ,  last_name ,  father_first_name , 
                                      father_last_name ,  gender ,  age ,  mobile ,  house_no ,  street ,  city ,  pincode ) 
					VALUES('$officer_id', '$crime_name', '$first_name', '$last_name', '$father_first_name', 
                                     '$father_last_name', '$gender', '$age', '$mobile', '$house_no', '$street', '$city', '$pincode') ";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
