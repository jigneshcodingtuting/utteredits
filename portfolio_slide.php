<html>

	<head>
		<title> Image Gallery | UtterEdits </title>
	
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
					
					$img = $_GET["id"];
					
					$sql = "select * from portfolio where id='$img'";
					
					$rs = mysql_query($sql);
					
					if($row=mysql_fetch_array($rs))
					{
						$x=$img+1;
						$y=$img-1;
						
						echo 	"<div style='margin-top:5px'>
									<a class='btn btn-secondary btn-sm' name='previous' href='portfolio_slide?id=$y'> Previous </a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<a class='btn btn-secondary btn-sm' name='next' href='portfolio_slide?id=$x'> Next </a>
								</div>
								
								<div class='animated zoomIn'>
									<img src = 'img/portfolio/$row[5]' class='img-fluid' alt='$row[5]' style='margin-top:10px'>
								</div>";
					}

				?>
				
			</center>
		</div>	
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
		
	</body>

</html>