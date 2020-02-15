<?php session_start(); ?>

<!DOCTYPE html>

<html lang="en">

	<head>
	
		<title> Admin Panel </title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<link rel="stylesheet" href="animate.min.css">
		<link rel="stylesheet" href="aos/dist/aos.css" />
		<script src="aos/dist/aos.js"></script>
		<script src="js/login.js"></script>
		
	</head>
	
	<body id="top" onload="login()">

		<script>AOS.init();</script>
		
		<div class="jumbotron" style="background-color: #d7eceb;">
			<center style="margin-top:px">
				<h1> <b>AITS & JP Tech</b> </h1>
				<h3> <b> Banswara, Rajasthan </b> </h3>
				<h3> <b> INDIA </b> </h3>
				<h4> <span class="glyphicon glyphicon-phone"></span> +91 9950015002, +91 9468517086 </h4>
			</center>
		</div>
		
		<div class="container">
			<div class="card card-outline-info">
				<div class="card-header">
					<table>
						<tr>
							<td>	
								<img src="img/admin.png" height="38px" width="40px">
							</td>
							<td>
								<h3>&nbsp; Admin Login</h3>
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
									<strong>Oh snap!</strong> Please use correct Admin ID & Password and try Login again.
								</div>";
					}
					
					if(isset($_SESSION["alert"]) && $_SESSION["alert"]==2)
					{
						echo 	"<div class='alert alert-success' role='alert'>
									<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
									<strong>Successfull </strong> Password has been reset successfully. Now you can Login with you new Password.
								</div>";
					}
				?>
					<form action="login_admin_data" method="post" name="login_frm">
						<div class="form-group">
							<label class="lbl" for="iaid"> <b>Admin ID</b> </label>
							<input type="text" class="form-control" id="iaid" name="aid" required placeholder="Admin ID">
						</div>
						
						<div class="form-group">
							<label class="lbl" for="ipass"> <b>Password</b> </label>
							<input type="password" class="form-control" id="ipass" name="pass" required placeholder="Password">
						</div>

						<div class="form-group">
							<input type="submit" class="btn btn-outline-primary" name="login" value=" Login ">&nbsp;&nbsp;
							<input type="reset" class="btn btn-outline-danger" name="reset" value="Cancel">
						</div>
						
						<div class="form-group">
							<a href="forgotps">Forgot Password ?</a>
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

<?php $_SESSION["alert"]=""; ?>