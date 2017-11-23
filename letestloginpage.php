<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" href="css/newform.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>
<script src="js/jquery-3.2.1.min"></script>
</head>
<body background="./4.jpg">
    
  
  <?php
  if(isset($_POST['submit']))
  {
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
		?>
		<script>
		alert("USername incorrect");
		</script>
	
    		  
<?php	}

	
	}


	$conn->close();
  }
?>
				<div class="container-fluid">
                   <div class="row">
			
					<br><br><br><br><br><br>
					
	
					<form action="#" method="POST">
						<div class="formgroup">
							<div class="row">
								<div class="col-lg-offset-3">
							<input class="input" required style="width:75%"id="name" type="text" name="offi-id" value=""
							placeholder="Officer'id" data-content="" data-toggle="tooltip" data-placement="right"/>
						</div>
						</div>
						<div class="formgroup">
						<div class="select-wrap">
						<div class="row">
								<div class="col-lg-offset-3">
							
						<select class="select" required name="designation"style="width:75%"id="signup-motivation" autocomplete="off">
                        <option value="" disabled selected>Select Officer's Designation</option>
                        <option value="acp" >A.C.P</option>
						<option value="D.G.P" >D.G.P</option>
						<option value="S.Inspector" >S.Inspector</option>
						<option value="Hawaldar">Hawaldar</option>
                      </select>
                      <i class="icon-down-open-mini"></i>
                    </div>
                  </div>
				  </div>
                  <div class="formgroup">
				  <div class="row">
								<div class="col-lg-offset-3">
				  
                      <input  class="input" id="email"  type="text" name="email" style="width:75%"value="" placeholder="Email" data-content="" data-toggle="tooltip" data-placement="right" data-analytics="AuthPageInput" data-attr1="Email" data-attr2="Signup" data-attr3="master" required/>
                  </div>
				  </div>
				  </div>
                  <div class="formgroup password-wrap">
                      <div class="row">
								<div class="col-lg-offset-3">
					  <input  required class="input" id="password"  type="password" name="pass"style="width:75%" placeholder="Password" data-content="" data-toggle="tooltip" data-placement="right" data-analytics="AuthPageInput" data-attr1="Password" data-attr2="Signup" data-attr3="master"/>
									
								</div>
				  </div></div>
				  <div class="row">
				  <div class="col-lg-offset-3">
				  <button type="submit" name="submit"  class="btn  navbar-inverse" value="submit" style="width:50%;color:white">SUBMIT</button>
                   </div></div>

				   </form>
 
 
 

 
 
 </body>
 </html>