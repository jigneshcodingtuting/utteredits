<?php session_start();
	
	if(empty ($_SESSION["id"]))
	{
		header("location:login_admin");
	}
	
?>

<!DOCTYPE html>

<html>

	<head>
		<title> TUS Images | Admin </title>
	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="animate.min.css">
		<link rel="stylesheet" href="aos/dist/aos.css" />
		<script src="aos/dist/aos.js"></script>
		
	</head>
	
	<body style="background-color:#262626;">
		<div class="container">
			<center>
				
				<?php

					include("db.php");
					
					$id = $_GET["id"];
					
					$sql = "select * from tus where id='$id'";
					
					$rs = mysql_query($sql);
					
					while($row=mysql_fetch_array($rs))
					{
						
						echo 	"<div style='margin-top:15px'>
									<a class='btn btn-secondary btn-sm' name='download' href='#' download> Download All Images </a>
								</div>
								<br>
								<div class='row'>
									<div class='col-sm-3'>
										<a href='../img/tus/$row[11]' download title='Cllick to Download this Image'>
											<img src = '../img/tus/$row[11]' class='img-fluid' alt='$row[11]' style='margin-top:10px;'>
										</a>	
									</div>
									
									<div class='col-sm-3'>
										<a href='../img/tus/$row[12]' download title='Cllick to Download this Image'>
											<img src = '../img/tus/$row[12]' class='img-fluid' alt='$row[12]' style='margin-top:10px;'>
										</a>	
									</div>
									
									<div class='col-sm-3'>
										<a href='../img/tus/$row[13]' download title='Cllick to Download this Image'>
											<img src = '../img/tus/$row[13]' class='img-fluid' alt='$row[13]' style='margin-top:10px;'>
										</a>	
									</div>
									
									<div class='col-sm-3'>
										<a href='../img/tus/$row[14]' download title='Cllick to Download this Image'>
											<img src = '../img/tus/$row[14]' class='img-fluid' alt='$row[14]' style='margin-top:10px;'>
										</a>	
									</div>
								</div>
								
								<br><br><br>
								
								<div class='row'>
									<div class='col-sm-3'>
										<a href='../img/tus/$row[15]' download title='Cllick to Download this Image'>
											<img src = '../img/tus/$row[15]' class='img-fluid' alt='$row[15]' style='margin-top:10px;'>
										</a>	
									</div>
									
									<div class='col-sm-3'>
										<a href='../img/tus/$row[16]' download title='Cllick to Download this Image'>
											<img src = '../img/tus/$row[16]' class='img-fluid' alt='$row[16]' style='margin-top:10px;'>
										</a>	
									</div>
									
									<div class='col-sm-3'>
										<a href='../img/tus/$row[17]' download title='Cllick to Download this Image'>
											<img src = '../img/tus/$row[17]' class='img-fluid' alt='$row[17]' style='margin-top:10px;'>
										</a>	
									</div>
									
									<div class='col-sm-3'>
										<a href='../img/tus/$row[18]' download title='Cllick to Download this Image'>
											<img src = '../img/tus/$row[18]' class='img-fluid' alt='$row[18]' style='margin-top:10px;'>
										</a>	
									</div>
								</div>
								
								<br><br><br>
								
								<div class='row'>
									<div class='col-sm-3'>
										<a href='../img/tus/$row[19]' download title='Cllick to Download this Image'>
											<img src = '../img/tus/$row[19]' class='img-fluid' alt='$row[19]' style='margin-top:10px;'>
										</a>	
									</div>
									
									<div class='col-sm-3'>
										<a href='../img/tus/$row[20]' download title='Cllick to Download this Image'>
											<img src = '../img/tus/$row[20]' class='img-fluid' alt='$row[20]' style='margin-top:10px;'>
										</a>	
									</div>
								</div>
								
								<div style='margin-top:20px'>
									<a class='btn btn-secondary btn-sm' name='download' href='#'> Download All Images </a>
								</div>";
					}

				?>
				
			</center>
			<br>
		</div>	
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
		
	</body>

</html>