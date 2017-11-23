<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_record_management";

$accused_id = $_POST["accussid"];
$crime_name = $_POST["crime-name"];
$crime = $_POST["crime"];
$crime_id = $_POST["crime-id"];
$victim_id= $_POST["victim-id"];
$officer_id = $_POST["officers-id"];
$date_of_crime = $_POST["date"];
$status_of_crime = $_POST["status"];
$area = $_POST["area"];
$street = $_POST["street"];
$city = $_POST["city"];
$pincode = $_POST["pincode"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO crime_record(crime_id, crime_name, crime, accused_id, victim_id, officer_id, street, area, city, pincode
                                    , date_of_crime, status_of_crime)
					VALUES('$crime_id', '$crime_name', '$crime', '$accused_id', '$victim_id', 
                                     '$officer_id', '$street', '$area', '$city', '$pincode', '$date_of_crime', '$status_of_crime') ";


if ($conn->query($sql) === TRUE) {
	$cmur=mysqli_query($conn,"SELECT * FROM crime_record WHERE crime='MURDER'");
	$mur= mysqli_num_rows($cmur);	
    $crob=mysqli_query($conn,"SELECT * FROM crime_record WHERE crime='ROBBERY'");
	$rob1= mysqli_num_rows($crob);	
    $cacb=mysqli_query($conn,"SELECT * FROM crime_record WHERE crime='ABDUCT'"); 
	$ac= mysqli_num_rows($cacb);	
    $csna=mysqli_query($conn,"SELECT * FROM crime_record WHERE crime='SNATCHING'");
	$sn= mysqli_num_rows($csna);	
	$mue=mysqli_query($conn,"UPDATE count SET count1=$mur WHERE crime='MURDER'");
	$rob=mysqli_query($conn,"UPDATE count SET count1=$rob1 WHERE crime='ROBBERY'");
	$acb=mysqli_query($conn,"UPDATE count SET count1=$ac WHERE crime='ABDUCT'");
	$sna=mysqli_query($conn,"UPDATE count SET count1=$sn WHERE crime='SNATCHING'");
    header('location:crimerecord.php?message="Instered"');
	echo '<p> Inserted </p>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
