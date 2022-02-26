<?php
include'connection.php';
error_reporting(0);
include'header.php';
?>
<!DOCTYPE>
<html>
	<head>
	
	<link rel="icon" href="images/loader.png">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@800&display=swap" 
		rel="stylesheet">
		<title>Home Three || Halpes || HTML Template For Donation Services</title>
		
		<!-- icons -->
		<script src="https://kit.fontawesome.com/c369163731.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>		
		<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
	
		<title></title>
		<style>
		a{
			text-decoration:none;
		}
		
		.datashow{
			padding: 10px 20px 20px 20px;
		}
		
		.heading h2{
			text-align: center;
			color: #15c8a0;
			font-family: 'Fredoka One', cursive;
		}
		
		.panel-heading{
			background-color: #f5f5f5;
			padding: 10px 15px;
			border-top-left-radius: 3px;
			border-top-right-radius: 3px;
		}
		
		.panel{
			border: 1px solid #ddd;
			border-radius: 4px;
		}
		
		.panel-body{
			padding: 15px;
		}
		
		
		.pannel-inputrow{
			white-space: nowrap;
			margin-bottom: 20px;
		}
		
		.pannel-inputrow1{
			display: inline-block;
		}
		.pannel-inputrow2{
			display: inline-block;
			float: right;
		}
		
		
		
		
		
		</style>
	</head>
	<body>
		<?php
			$sql = "SELECT * FROM studentregistration";
			$result = $conn->query($sql);
		?>
		
		
		<div class="datashow">
			<div class="heading">
				<h2>Data</h2>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							Listing
                        </div>
						<div class="panel-body">
							<div class="table-responsive">
								<div class="pannel-inputrow">
									<div class="pannel-inputrow1">
										<label>
											<select>
												<option>10</option>
												<option>25</option>
												<option>50</option>
											</select>
											 records per page
										</label>
									</div>
									<div class="pannel-inputrow2">
										<label>
											Search:
											<input type="search">
										</label>
									</div>
								</div>
								<table class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
                                            <th>#</th>
                                            <th>firstname</th>
                                            <th>middlname</th>
                                            <th>lastname</th>
                                            <th>dob</th>
                                            <th>Email</th>
                                            <th>Address</th>
											<th>Phone no.</th>
											<th>city</th>
											<th>Zip</th>
											<th>gender</th>
											<th>country</th>
											<th>action</th>
                                        </tr>
                                    </thead>
									
									
									
									
									
									<?php
									
									
									
									
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$row['id'];
				$row['fname'];
				$row['mname'];
				$row['lname'];
				$row['dob'];
				$row['email'];
				$row['address'];
				$row['mobleno'];
				$row['city'];
				$row['zip'];
				$row['gender'];
				$row['country'];
			?>
			
									 <tbody>                                   
                                        <tr class="">
											<td class="center"><?php echo $row["id"];?></td>
                                            <td class="center"><?php echo $row["fname"];?></td>
                                            <td class="center"><?php echo $row["mname"];?></td>
                                            <td class="center"><?php echo $row["lname"];?></td>
                                            <td class="center"><?php echo $row["dob"];?></td>
                                            <td class="center"><?php echo $row["email"];?></td>
											<td class="center"><?php echo $row["address"];?></td>
											<td class="center"><?php echo $row["mobleno"];?></td>
											<td class="center"><?php echo $row["city"];?></td>
											<td class="center"><?php echo $row["zip"];?></td>
											<td class="center"><?php echo $row["gender"];?></td>
											<td class="center"><?php echo $row["country"];?></td>
                                            <td class="center">

                                            <a href="update.php?upid=<?php echo $row["id"];?>"><button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button> 
											<a href="delete.php?delid=<?php echo $row["id"];;?>" onclick="return confirm('Are you sure you want to delete?');">  <button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
                                            </td>
                                        </tr>                                
                                    </tbody>
									
								<?php	
									
									
									
										}
			} else {
			echo "0 results";
			}	
		?>
									
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
	</body>
</html>