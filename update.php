<!DOCTYPE>
<html>
	<head>
	<meta charset="utf-8">
		<link rel="icon" href="images/loader.png">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@800&display=swap" 
		rel="stylesheet">
		<title>Home Three || Halpes || HTML Template For Donation Services</title>
		
		<!-- icons -->
		<script src="https://kit.fontawesome.com/c369163731.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>		
		<link rel="stylesheet" href="style.css">
		
		<style>
		
		.jjk{
			margin-top: 30px;
		}
		
		</style>
	</head>
	<body>
	
				<?php
				
				include'connection.php';
				error_reporting(0);
				include'header.php';
				
				
				
				
				
					$id = $_GET['upid'];
				
				if(isset($_POST['submit'])){
					
					$id = $_GET['upid'];
				
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
					
					
					$update= "UPDATE studentregistration SET fname = '$name', mname = '$midname', lname = '$lastname', dob = '$dob', email= '$email', 
					address = '$address', mobleno= '$phone', city = '$city', zip = '$zip', gender = '$gender', country = '$country' WHERE id = $id";
					
					
					
					$result = $conn->query($update);
					
					if($result){
						?>
						<script>
							<?php
								header("location: show.php");
							?>
							alert("data update properly");
						</script>
						<?php
					}
					else{
						?>
						<script>
							alert("data is not inserted");
						</script>
						<?php
					}
				}
					
					$select = "select * from studentregistration where id = {$id}";
				
					$result = $conn->query($select);
					
					while($row = $result->fetch_assoc()){
					
				
				?>

	
	
		<div class="jjk">
			<div class="container">
				<form class="row g-3" method="post">
						
						<div class="col-4">
							<label for="inputEmail4" class="form-label">First Name</label>
							<input type="text" class="form-control" name="first-name" value="<?php echo $row["fname"];?>" placeholder="First name" aria-label="First name">
						</div>
						<div class="col-4">
							<label for="inputEmail4" class="form-label">Mid Name</label>
							<input type="text" class="form-control" name="mid-name" value="<?php echo $row["mname"];?>" placeholder="Mid name" aria-label="Last name">
						</div>
						<div class="col-4">
							<label for="inputEmail4" class="form-label">Last Name</label>
							<input type="text" class="form-control" name="last-name" value="<?php echo $row["lname"];?>" placeholder="Last name" aria-label="Last name">
						</div>
						<div class="col-md-8">
							<label for="inputEmail4" class="form-label">Email</label>
							<input type="email" class="form-control" name="email" value="<?php echo $row["email"];?>" id="inputEmail4">
						</div>
						<div class="col-md-4">
							<label for="inputState" class="form-label">Gender</label>
							<select id="inputState" name="gender" value="<?php echo $row["gender"];?>" class="form-select">
								<option>Male</option>
								<option>Fe-Male</option>
							</select>
						</div>
						<div class="col-6">
							<label for="inputAddress" class="form-label">Date of Birth</label>
							<input type="date" name="dob" class="form-control" value="<?php echo $row["dob"];?>" id="inputAddress" placeholder="Aug 90's">
						</div>
						<div class="col-6">
							<label for="inputAddress2" class="form-label">Phone</label>
							<input type="text" name="phone" class="form-control" value="<?php echo $row["mobleno"];?>" id="inputAddress2" placeholder="123-456-789">
						</div>
						<div class="col-12">
							<label for="inputAddress2" class="form-label">Address</label>
							<input type="text" name="address" class="form-control" value="<?php echo $row["address"];?>" id="inputAddress2" placeholder="LA , Texas">
						</div>
						<div class="col-md-6">
							<label for="inputCity" class="form-label">City</label>
							<input type="text" name="city" class="form-control" value="<?php echo $row["city"];?>" id="inputCity">
						</div>
						<div class="col-md-4">
							<label for="inputState" class="form-label">country</label>
								<select id="inputState" name="country" value="<?php echo $row["country"];?>" class="form-select">
								  <option value="India">India</option>
								  <option value="America">America</option>
								  <option value="France">France</option>
								  <option value="Germany">Germany</option>
								</select>
						</div>
						<div class="col-md-2">
							<label for="inputZip" class="form-label">Zip</label>
							<input type="text" name="zipcode" value="<?php echo $row["zip"];?>" class="form-control" id="inputZip">
						</div>
						<div class="col-12">
							<button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
						</div>
				</form>
				
				<?php
				
				}
				?>
				
			</div>
		</div>



	
	</body>
</html>