<!doctype html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crime_record_management";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	
$sql = 'SELECT crime_name FROM crime_record';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}}
?>
<html>
<head>
<link rel="stylesheet" href="css/letestform.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>                 
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
	<body class="inves">
	<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			
			<ul class="nav navbar-nav">
			  <li class="active"><a href="aa.html">Home</a></li>
			  
			
			<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Add record
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="accused.php">Add-CrimeRecord</a></li>
          <li><a href="victiminfo.php">Add-Victim</a></li>
          <li><a href="crimerecord.php">Add-Accused</a></li>
         
        </ul>
      </li>
			
			 <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Show record
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="show_record.php">All crime</a></li>
          <li><a href="showcriminal.php">All Criminals</a></li>
          <li><a href="show_accused.php">Accused for a record</a></li>
         
        </ul>
      </li>
			  
			
			 <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Update record
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="crime_update.php">Update crime record</a></li>
          <li><a href="accused_update.php">Update accused record</a></li>
          
         
        </ul>
      </li>
			  
			
			  <li class="active"><a href="chart1.php">Crime Rate</a></li>
			  
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li></li>	
			  <li><a href="#" id="myBtn1"><span class="glyphicon glyphicon-log-out" ></span> Logout</a></li>
			</ul>
		  </div>
		</nav>
		<h1 align="center" class="colo"> ACCUSED -RECORD</h1>
		<br><br><br><br>
		
	<form action="accused_insert.php" method="POST">
		<div class="container">
			<div class="row">
			<div class="col-lg-offset-1 col-md-4">
			<div class="form-group">  <!--needed for optimum spacing-->
						<select class="select" style="width:100%;height:5%"name="crime_name">
						<option>SELECT Crime</option>
						<?php  
						   		
							while ($row = mysqli_fetch_array($query))
							{
								echo '<option value="'.$row['crime_name'].'" >'.$row['crime_name'].'</option>';
			
							}
							?>
						</select>
					</div>
					</div>
			<div class="col-lg-offset-2 col-md-4">
					<div class="form-group">
						<select class="select" style="width:100%;height:5%" name="status">
							<option>STATUS</option>
							<option value="guilty" >Solved</option>
							<option value="notguilty" >Unsolved</option>
							<option value="underprocess" >UNDER-PROSESS</option>
				        </select>
                      <i class="icon-down-open-mini"></i>
                    </div>
                      <i class="icon-down-open-mini"></i>
                    </div>
			
					</div>
					</div>
		
		<div class="container">

			
			<div class="row">	
				<div class="col-lg-offset-1 col-md-4">
					<div class="form-group">  <!--needed for optimum spacing-->
						<strong class="colo">First-Name </strong>
						<input type="text" placeholder ="first_name"  class="form-control input-mid"   name="first_name"  required>
					</div>
					</div>
					<div class="col-lg-offset-2 col-md-4">
					<div class="form-group">  <!--needed for optimum spacing-->
						<strong class="colo">Last Name</strong>
						<input type="text" placeholder ="last_name" class="form-control input-mid" name="last_name"  required>
					</div>
					</div>
				</div>
				<div class="row">	
				<div class="col-lg-offset-1 col-md-4">
					<div class="form-group">  <!--needed for optimum spacing-->
						<strong class="colo"> Father's Name </strong>
						<input type="text" placeholder ="first_name"  class="form-control input-mid" id="CRIME"  name="fname"  required>
					</div>
					</div>
					<div class="col-lg-offset-2 col-md-4">
					<div class="form-group">  <!--needed for optimum spacing-->
						<strong class="colo">Last Name </strong>
						<input type="text" placeholder ="last_name" class="form-control input-mid" name="flname"  required>
					</div>
					</div>
				</div>
			<div class="row">	
				<div class="col-lg-offset-1 col-md-4">
					<div class="form-group">  <!--needed for optimum spacing-->
						<strong class="colo">Acused Id</strong>
						<input type="text" placeholder ="Id"  class="form-control input-mid" name="accused_id" required>
					</div>
				</div>
		
			    	<div class="col-lg-offset-2 col-md-4">
					<div class="form-group">  <!--needed for optimum spacing-->
						<strong class="colo">GENDER</strong>
						<input type="radio" name="optradio" value="male">MALE
							<input type="radio" name="optradio" value="female">FEMALE</div>
							</div>
						
						
					
					
					</div>
					<div class="row">
					<div class="col-lg-offset-1 col-md-4">
					<div class="form-group">  <!--needed for optimum spacing-->
						<strong class="colo">Age</strong>
						<input type="number" placeholder ="age"  class="form-control input-mid" name="age"id="CRIME"  required>
					</div>
				</div>
			
					<div class="col-lg-offset-2 col-md-4">
					<div class="form-group">  <!--needed for optimum spacing-->
						<strong class="colo">Contact-no</strong>
						<input type="nummber" placeholder ="number" name="phonenum"class="form-control input-mid" id="CRIME"  required>
					</div>
					</div>
				</div>			
			<div class="row">	
				<div class="col-lg-offset-1 col-md-4">
					<div class="form-group">  <!--needed for optimum spacing-->
						<strong class="colo">House-no</strong>
						<input type="text" placeholder ="house no" class="form-control input-mid" id="CRIME"  name="house_no" required>
					</div>
					</div>
					<div class="col-lg-offset-2 col-md-4">
					<div class="form-group">  <!--needed for optimum spacing-->
						<strong class="colo">Street</strong>
						<input type="text" placeholder ="street" name="street" class="form-control input-mid" id="CRIME"  required>
					</div>
					</div>
				<div class="col-lg-offset-1 col-md-4">
					<div class="form-group">  <!--needed for optimum spacing-->
						<strong class="colo">Pincode</strong>
						<input type="text" placeholder ="pincode" name="pincode" class="form-control input-mid" id="pincode"  required>
					</div>
					</div>
					<div class="col-lg-offset-2 col-md-4">
					<div class="form-group">  <!--needed for optimum spacing-->
						<strong class="colo">City</strong>
						<input type="text" placeholder ="city" class="form-control input-mid" name="city"id="CRIME" required>
					</div>
					</div>
					
			</div>
			</div>
		     <div class="row">
				  <div class="col-lg-offset-4 ">
					<button type="submit"  class="btn  navbar-inverse" value="submit" style="width:50%;color:white" >SUBMIT</button>
                   </div>
			<div>			
<br>				   
			    
			
			
				</form>
			<style>
	/* The Modal  middle of page(background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content1 {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close1 {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
    <span class="close1">&times;</span>
    <p>Are You Sure You want to LOGOUT?</p>
	<div class="row">
	     <div class="col-lg-3">
			<button type="submit" class="btn btn-success"><a href="letestloginpage.php">Yes</a></button>
						<button type="submit" class="btn btn-success"><a href="aa.html">NO</a></button>
			 
		 </div>
	</div>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById('myModal1');

// Get the button that opens the modal
var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
			</body>
	</html>
	