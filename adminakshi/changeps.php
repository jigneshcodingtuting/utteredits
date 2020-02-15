<?php session_start();
	
	if(empty ($_SESSION["id"]))
	{
		header("location:login_admin");
	}
	
?>

<!DOCTYPE html>

<html lang="en">

	<head>
	
		<title> Change Password | Admin </title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<link rel="stylesheet" href="animate.min.css">
		<link rel="stylesheet" href="aos/dist/aos.css" />
		<script src="aos/dist/aos.js"></script>
		<script src="js/changeps.js"></script>
		
	</head>
	
	<body onload="ld()">
		
		<nav class="navbar navbar-fixed-top navbar-light" style="background-color: #e3f2fd;">
			
			<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#ex">&#9776;</button>
			
			<div class="collapse navbar-toggleable-xs" id="ex">
				
				<div class="nav navbar-nav">
					<ul class="nav navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="home_admin">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="inq_view" title="Inquires">Inquires</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="qr_view" title="Quotation Request">Quotation Requests</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="tus_view" title="Try Us Out Requests">TUO Requests</a>
						</li>
						<li class="nav-item">
							<div class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" title="Click for More">Portfolio Manager</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="uploadpic" title="Upload Images"> Upload Images </a>
									<a class="dropdown-item" href="port_view" title="View & Operations (Change / Delete Images)"> View & Operations </a>
								</div>
							</div>
						</li>	
						
						<div class="pull-xs-right">
							<li class="nav-item">
								<div class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" title="Click for More">Akshi</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="changeps" title="Change Password"> Change Password </a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="logout" title="Logout"> Logout </a>
									</div>
								</div>	
							</li>	
						</div>
					</ul>	
				</div>
			</div>
			
		</nav>
		
		<div class="container">
			<div class="card card-outline-info" style="margin-top:120px">
				<div class="card-header">
					<table>
						<tr>
							<td>	
								<img src="img/cp.png" height="68px" width="70px">
							</td>
							<td>
								<h3>&nbsp; <b>Change Password</b></h3>
							</td>
						</tr>
					</table>
				</div>
				
				<div class="card-block">
				
					<?php
						if(isset($_SESSION["alert"]) && $_SESSION["alert"]==1)
						{
							echo 	"<div class='alert alert-success' role='alert'>
										<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
										<strong>Done!</strong> Your Password has been changed successfully. Now you can Login with your New Password.
									</div>";
						}
						
						if(isset($_SESSION["alert"]) && $_SESSION["alert"]==2)
						{
							echo 	"<div class='alert alert-warning' role='alert'>
										<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
										<strong>Mismatch !</strong> New Password and Confirm Password is mismatch, please try again.
									</div>";
						}
						
						if(isset($_SESSION["alert"]) && $_SESSION["alert"]==3)
						{
							echo 	"<div class='alert alert-danger' role='alert'>
										<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
										<b>Wrong Input !</b> Current Password is wrong.
									</div>";
						}
					?>
					
					<form action="changeps_data" method="post" name="changepsfrm">
						<div class="form-group">
							<label class="lbl" for="icrps"> <b>Current Password</b> </label>
							<input type="password" class="form-control" id="icrps" name="crps" required placeholder="Current Password">
						</div>
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

<?php $_SESSION["alert"]=""; ?>