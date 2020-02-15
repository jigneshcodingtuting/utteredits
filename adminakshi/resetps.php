<?php session_start();
	if(isset($_SESSION['rem']) && ($_SESSION['rem']=='upadhyayakshi24@gmail.com'))
	{
?>

<!DOCTYPE html>

<html lang="en">

	<head>
	
		<title> Reset Password | Admin </title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<link rel="stylesheet" href="animate.min.css">
		<link rel="stylesheet" href="aos/dist/aos.css" />
		<script src="aos/dist/aos.js"></script>
		<script src="js/changeps.js"></script>
		<script src="js/login.js"></script>
		
	</head>
	
	<body onload="resetps()">
		
		<div class="container">
			<br>
			<center><img src = "img/UTTEREDITS LOGO.png" class="img-fluid" alt="logo"></center><br>
			<div class="card card-outline-info" style="margin-top:0px">
				<div class="card-header">
					<table>
						<tr>
							<td>	
								<img src="img/reset.png" height="68px" width="70px">
							</td>
							<td>
								<h3>&nbsp; <b>Reset Password</b></h3>
							</td>
						</tr>
					</table>
				</div>
				
				<div class="card-block">
				
					<?php
						if(isset($_SESSION["alert"]) && $_SESSION["alert"]==3)
						{
							echo 	"<div class='alert alert-warning' role='alert'>
										<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
										<strong>Mismatch !</strong> New Password and Confirm Password is mismatch, please try again.
									</div>";
						}
						
						if(isset($_SESSION["alert"]) && $_SESSION["alert"]==4)
						{
							echo 	"<div class='alert alert-danger' role='alert'>
										<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
										<strong>Error occured !</strong> Password not changed, please try again.
									</div>";
						}
					?>
					
					<form action="resetps_data" method="post" name="resetps_frm">
						<div id="inps"></div>
						<div class="form-group">
							<label class="lbl" for="inps"> <b>New Password</b> </label>
							<input type="password" class="form-control" id="inps" name="nps" onblur="chk()" required placeholder="New Password (Min. 8 characters)">
						</div>

						<div class="form-group">
							<label class="lbl" for="icnps"> <b>Confirm Password</b> </label>
							<input type="password" class="form-control" id="icnps" name="cnps" required placeholder="Confirm Password">
						</div>

						<div class="form-group">
							<input type="submit" class="btn btn-outline-primary" name="login" value=" Done ">&nbsp;&nbsp;
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

<?php 
	}
	
	else
	{
		header("location:login_admin");
	}
	
	$_SESSION["alert"]=""; 
?>