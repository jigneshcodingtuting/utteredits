<?php session_start(); ?>

<html>

	<head>
		<link rel="icon" href="img/logo.png">
		<title>Forgot Password | Admin</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<link rel="stylesheet" href="animate.min.css">
		<link rel="stylesheet" href="aos/dist/aos.css" />
		<script src="aos/dist/aos.js"></script>
		<script src="js/login.js"></script>
	</head>
	
	<body onload="forgotps()">
		
		<script>AOS.init();</script>
		
		<div class="container">
			<br>
			<center><img src = "img/UTTEREDITS LOGO.png" class="img-fluid" alt="logo"></center><br>
			
			<div class="card card-outline-info">
				<div class="card-header">
					<table>
						<tr>
							<td>	
								<img src="img/forgotps.png" height="58px" width="55px">
							</td>
							<td>
								<h3>&nbsp; Forgot Password</h3>
							</td>
						</tr>
					</table>
				</div>
				
				<div class="card-block">
					
				<?php
					if(isset($_SESSION["alert"]) && $_SESSION["alert"]==1)
					{
						echo 	"<div class='alert alert-danger' role='alert'>
									<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
									<strong>Mismatch!</strong> All information did't match simultaniously. Please try again with all correct information.
								</div>";
					}
				?>
					<form action="forgotps_data" method="post" name="forgotps_frm">
						<div class="form-group">
							<label class="lbl" for="iem"> <b>Registered Mail ID</b> </label>
							<input type="email" class="form-control" id="iem" name="rem" required placeholder="Registered Mail ID">
						</div>
						
						<div class="form-group">
							<label class="lbl" for="ipass"> <b>Date Of Birth</b> </label>
							<div class="row">
								<div class="col-sm-4">
									<select class="form-control" name="day" required>
										<option value=""> Day </option>
										<?php
											for($i=1; $i<=31; $i++)
											{
												echo "<option value='$i'> $i </opition>";
											}
										?>
									</select>
								</div>
								
								<div class="col-sm-4">
									<select class="form-control" name="month" required>
										<option value=""> Month </option>
										<?php
											for($i=1; $i<=12; $i++)
											{
												echo "<option value='$i'> $i </opition>";
											}
										?>
									</select>
								</div>
								
								<div class="col-sm-4">
									<select class="form-control" name="year" required>
										<option value=""> Year </option>
										<?php
											for($i=2015; $i>=1980; $i--)
											{
												echo "<option value='$i'> $i </opition>";
											}
										?>
									</select>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label class="lbl" for="isq"> <b>Which is your favorite fashion brand ?</b> </label>
							<input type="text" class="form-control" id="isq" name="sq" required placeholder="Answere here">
						</div>
						
						<div class="form-group">
							<input type="submit" class="btn btn-outline-primary" name="login" value=" Next -> ">&nbsp;&nbsp;
							<input type="reset" class="btn btn-outline-danger" name="reset" value="Cancel">
						</div>
						
					</form>
				</div>
			</div>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
		
	</body>

</html>