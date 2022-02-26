<?php
include("connection.php");
error_reporting(0);
include("header.php");
?>
<!DOCTYPE>
<html>
	<head>
	<meta charset="utf-8">
	<link rel="icon" href="images/loader.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@800&display=swap" 
	rel="stylesheet">
	
	<title>contact</title>
	
	
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" 
	crossorigin="anonymous">
	
	<link rel="stylesheet" href="cstyle.css">
	</head>
		
	<body>
	<?php
		if(isset($_POST['submit']))
		{
			$name=$_POST["first-name"];
			$midname=$_POST["mid-name"];
			$lastname=$_POST["last-name"];
			$dob=$_POST["dob"];
			$address=$_POST["address"];
			$city=$_POST["city"];
			$zip=$_POST["zipcode"];
			$email=$_POST["email"];
			$phone=$_POST["phone"];
			$gender=$_POST["gender"];
			$country=$_POST["country"];
									
			
			$sql = "INSERT INTO `studentregistration`(`fname`, `mname`, `lname`, `dob`, `email`, `address`, `mobleno`, `city`, `zip`, `gender`, `country`)
			VALUES ('$name', '$midname', '$lastname', '$dob', '$email', '$address', '$phone', '$city', '$zip', '$gender', '$country')";
			
			
			if ($conn->query($sql) === TRUE) {
				header("location: index.php");
				?>
				<script>
					alert("record entered successfully");
				</script>
				<?php
				}
			
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				}
		}
	?>

		<div class="form" style="margin-top: 50px">
			<div class="container">
				<div class="text-section" style="text-align:center;margin-bottom:35px">
					<div style="white-space:nowrap">
						<div style="display: inline-block">
							<hr style="width: 50px;margin-top:11px; height:3px; color: #15c8a0;opacity: 1;margin-bottom:5px">
						</div>
						<div style="display: inline-block">
							<span style="color:#15c8a0;font-weight:900;font-family:'Nunito', sans-serif;">Contact With Us</span>
						</div>
					</div>
					<h2 style="font-weight:900;font-size:50px">We love to hear from our <br> happy customers</h2>
				</div>
				<div class="row">
					<div class="col-6 leftform">
						<div style="width: 510px">
							<div style="margin-bottom:19px">
								<img src="images/contact-page-img-1.jpg" height="186px" width="510px">
							</div>
							<div>
								<p>
									There are many variations of passages of available but
									the majority have suffered alteration in some form, 
									by injected humou or randomised words even slightly believable.
								</p>
							</div>
							<div class="infosection">
								<ul>
									<li class="row">
										<div class="icons col-4 d-flex justify-content-center">
											<i class="far fa-comment-dots"></i>
										</div>
										<div class="text col-8">
											<p>Call Anytime</p>
											<h5>92 666 888 0000</h5>
										</div>
									</li>
									<hr>
									<li class="row">
										<div class="icons col-4 d-flex justify-content-center">
											<i class="fas fa-at"></i>
										</div>
										<div class="text col-8">
											<p>Send Email</p>
											<h5>needhelp@company.com</h5>
										</div>
									</li>
									<hr>
									<li class="row">
										<div class="icons col-4 d-flex justify-content-center">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<div class="text col-8">
											<p>Visit Office</p>
											<h5>80 broklyn golden street</h5>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="rightform">
							<h2 style="text-align:center">Registration</h2>
							<form action="" method="post">
								<h3>Student name</h3>
								<div class="borderclass">
									<div class="row">
										<div class="col-4">
											<input type="text" placeholder="First Name" name="first-name">
										</div>
										<div class="col-4">
											<input type="text" placeholder="Middle Name" name="mid-name">
										</div>
										<div class="col-4">
											<input type="text" placeholder="Last Name" name="last-name">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-6">
										<h3>Date of Birth</h3>
										<div class="dobclass">
											<input type="date" name="dob">
										</div>
									</div>
									<div class="col-6">
										<h3>Gender</h3>
										<div class="genderclass">
											<input type="radio" id="html" name="gender" value="male">
											<label for="html">Male</label>
											<input type="radio" id="css" name="gender" value="fe-male">
											<label for="css">Fe-Male</label>
										</div>
									</div>
								</div>
								<div class="addressclass">
									<h3>Address</h3>
									<div class="mainaddress">
										<div class="row">
											<div class="col-12">
												<textarea type="text" placeholder="Street Address" name="address"></textarea
											</div>
										</div>
									</div>
								</div>
								<div class="city">
									<h3>City</h3>
									<div class="row">
										<div class="col-6">
											<input type="text" placeholder="City" name="city">
										</div>
										<div class="col-6">
											<input type="text" placeholder="Zip Cote" name="zipcode">
										</div>
									</div>
								</div>
								<div class="country">
									<h3>Country</h3>
									<div class="row">
										<div class="col-12">
											<select name="country">
												<option value="India">India</option>
												<option value="America">America</option>
												<option value="Australia">Australia</option>
												<option value="Russia">Russia</option>
											  </select>
										</div>
									</div>
								</div>
								<div class="personalinfo">
									<div class="row">
										<div class="col-6">
											<h3>Student Email</h3>
											<input type="email" placeholder="E-mail" name="email">
										</div>
										<div class="col-6">
											<h3>Mobile Number</h3>
											<input type="tel" placeholder="Phone number" name="phone">
										</div>
									</div>
								</div>
								<div class="submit">
									<input type="submit" name="submit" value="Send a Message">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>