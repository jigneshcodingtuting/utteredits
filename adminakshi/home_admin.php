<?php session_start();
	
	if(empty ($_SESSION["id"]))
	{
		header("location:login_admin");
	}
	
?>

<!DOCTYPE html>

<html lang="en">

	<head>
	
		<title> Admin Panel </title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<link rel="stylesheet" href="animate.min.css">
		<link rel="stylesheet" href="aos/dist/aos.css" />
		<script src="aos/dist/aos.js"></script>
		
	</head>
	
	<body>
		
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
			<center>
				<img src = "img/welcome.jpg" class="img-fluid" alt="Responsive image" style="margin-top:100px">
				<img src = "img/admin2.png" class="img-fluid" alt="Responsive image" style="">
			</center>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
	
	</body>
	
</html>	