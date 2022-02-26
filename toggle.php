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
			body{
				margin: 0;
				padding: 0;
				font-family: sans-serif;
				background: linear-gradient(#E0EAFC,#CFDEF3);
				height: 100vh;
			}
			
			.center, .content{
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translate(-50%, -50%);
			}
			
			#click{
				display:  none;
			}
			
			
			.click-me{
				display: block;
				width: 160px;
				height:  50px;
				background: #27ae60;
				color: white;
				text-align: center;
				font-size: 22px;
				border-radius: 3px;
				cursor: pointer;
				line-height: 50px;
				transition: 0.5s;
			}
			
			.click-me:hover{
				background: #219150;
			}
			
			
			.content{
				width: 400px;
				height: 350px;
				visibility: hidden;
				background: white;
				border-radius: 3px;
				box-shadow: 0 2px 12px 0 rgba(0, 0, 0, 0.4);
			}
			
			#click:checked ~ .content{
				visibility: visible;
			}
			
			
			.header{
				height: 68px;
				background: #27ae60;
				overflow: hidden;
				border-radius: 3px 3px 0 0 ;
				box-shadow: 0 2px 3px 0 rgba(0, 0, 0,0.2);
			}
			
			.header h2{
				color: white;
				padding-left: 32px;
				font-wieght: normal;
			}
			
			.fa-times{
				position: absolute;
				right: 20px;
				top: 20px;
				color: e8f7fc;
				font-size: 20px;
				font-weight: bold;
				cursor: pointer;
			}
			
			
			.fa-check{
				font-size: 50px;
				color: #27ae60;
				font-weight: bold;
				height: 80px;
				width: 80px;
				border: 1px solid #27ae60;
				margin: 30px 0 0 160px;
				text-align: center;
				padding-top: 13px;
				border-radius: 50%;
				box-sizing: boeder-box;
			}
			
			p{
				padding-top: 10px;
				font-size: 19px;
				color: #1a1a1a;
				text-align: center;
			}
			
			.line{
				bottom: 60px;
				width: 100%;
				
			}
		</style>
	</head>
	<body>
		<div class="center">
			<input type="checkbox" id="click">
			<label for="click" class="click-me">click</label>
			<div class="content">
				<div class="header">
					<h2>model popup</h2>
					<label for="click" class="fas fa-times"></label>
					<label for="click" class="fas fa-check"></label>
					<p>lorem ipsum dollar sit amet, consectur addirsicing eli</p>
					<div class="line"></div>
					<label for="click" class="close-btn">close</label>
				</div>
			</div>
		</div>
		
		
	</body>
</html>