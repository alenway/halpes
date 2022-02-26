<?php

include'connection.php';
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
		<title>Home Three || Halpes || HTML Template For Donation Services</title>
		
		<!-- icons -->
		<script src="https://kit.fontawesome.com/c369163731.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
		<style>
			video{
				position: fixed;
				z-index: -1;
				right: 0;
				bottom: 0;
			}
			
			.frame{
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				height: 100%;
				width: 100%;
				background-color: rgba(12,12,13,.5);
				z-index: 3;
			}
			
			.container{
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50% , -50%);
			}
			
			.login-form{
				height: 325px;
				width: 270px;
				border-radius: 10px;
				display: flex;
				flex-direction: column;
				align-items: center;
				background: #fcfcfca8;
				color: #15c8a0;
				padding-top: 60px;
				float: right;
			}
			
			.login-form input{
				border: none;
				border-radius: 5px;
			}
			
			.login h2{
				letter-spacing: 1px;
			}
			
			input{
				width: 200px;
				margin-top: 20px;
				padding: 10px;
				font-size: 13px;
			}
			
			.btn{
				padding: 5px 20px;
				margin-top: 30px;
				background-color: #15c8a0;
				color: white;
			}
			
			.btn:hover{
				color:white;
				background-color: #1f2230;
				transition: 0.5s;
			}
			
			a{
				text-decoration: none;
			}
		</style>
	</head>
	<body>
	<?php
	
	
	
	if(isset($_POST['submit'])){
		
		
		
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
		
		$select = " select * from signup where username = '$username' AND password = '$password'";
		$result = $conn->query($select) or die("query failed");
		
		if(mysqli_num_rows($result) > 0){
			
			echo "success";
			header("location: index.php");
				
		}
		else{
			echo "password not match";
		}
			
	}

		
		
	?>
		<video autoplay muted loop>
			<source src="videos/Waves crashing on the shore.mp4">
		</video>
		<div class="container">
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
				<div class="login-form">
					<div class="login">
						<h2>Login</h2>
					</div>
					<input type="text" name="username" placeholder="username">
					<input type="password" name="password" placeholder="password">
					<button type="submit" name="submit" class="btn">login</button>
					<p>Don't Have an account?<a href="signup.php"> Signup</a></P>
				</div>
			</form>
		</div>	
	</body>
</html>