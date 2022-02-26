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
		<style>
			.btn{
				width: 100%;
			}
			
			p{
				padding: 10px;
				color: #15c8a0;
			}
			
			h4{
				color: #15c8a0;
			}
			
			video{
				position: fixed;
				z-index: -1;
				top: 0;
				height: 100%;
				width: 100%;
				object-fit: cover;
			}
		</style>
	</head>
	<body>
	<?php
		include'header.php';
		include'connection.php';
		
		if(isset($_POST['submit'])){
			
			$username = $_POST['username'];
			$email = $_POST['email'];
			$mobile = $_POST['mobile'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			
			
			$emailquery = "select * from signup where email='$email'";
			$query = $conn->query($emailquery);
			
			
			if($password === $cpassword){
					
				$insertquery = "insert into signup (username, email, mobile, password, cpassword)
				values('$username', '$email', '$mobile', '$password', '$cpassword')";
					
					
					
				$result = $conn->query($insertquery);
					
				if($result){
					?>
					<script>
						alert("signup successfully");
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
			else{
				echo "password are not matching";
			}
			
		}
	?>
		
		<video autoplay muted loop>
			<source src="videos/video.mp4">
		</video> 
	
		<div class="">
		<article class="card-body mx-auto" style="max-width:400px;">
			<h4>Create Account</h4>
			<p>Get Started with free account</p>
			
			<form action="" method="post">
				<div class="form-group input-group">
					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fa fa-user"></i></span>
						<input type="text" name="username" class="form-control" placeholder="Full name" aria-label="Username" aria-describedby="basic-addon1" required>
					</div>
				</div>
				<div class="form-group input-group">
					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						<input type="email" name="email" class="form-control" placeholder="Email address" aria-label="Username" aria-describedby="basic-addon1" required>
					</div>
				</div>
				<div class="form-group input-group">
					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
						<input type="number" name="mobile" class="form-control" placeholder="Phone number" aria-label="Username" aria-describedby="basic-addon1" required>
					</div>
				</div>
				<div class="form-group input-group">
					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fas fa-lock"></i></span>
						<input type="password" name="password" class="form-control" placeholder="Create password" aria-label="Username" aria-describedby="basic-addon1" required>
					</div>
				</div>
				<div class="form-group input-group">
					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fas fa-lock"></i></span>
						<input type="password" name="cpassword" class="form-control" placeholder="Confirm password" aria-label="Username" aria-describedby="basic-addon1" required>
					</div>
				</div>
				
				<button type="submit" name="submit" class="btn btn-success">Create Account</button>
				
				<p>Have an account?<a href="admin.php">Log in</a></p>
			</form>
		</article>
		
		</div>	
	</body>
</html>