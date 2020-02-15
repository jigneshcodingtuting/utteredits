<!DOCTYPE html>

<?php session_start(); ?>

<html>

	<head>
	
		<title> Utter Edits | Get Quotation</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="animate.min.css">
		<link rel="stylesheet" href="aos/dist/aos.css" />
		<script src="aos/dist/aos.js"></script>
		<script src="alphanum.js"></script>
		
	</head>
	
	<body style="margin-top:10px;font-size:100%" id="top" onload="ld()">

		<script>AOS.init();</script>
		
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-xs-12 col-sm-9">
					<div class="animated fadeInDown">
						<img src = "img/logo.png" class="img-fluid" alt="Responsive image">
					</div>	
					
					<div class="animated fadeInRight">
						<hr style="height:4px;border:none;background-color:#eee;" />
					</div>
					
					<div class="animated fadeInLeft">
						<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#ex" aria-controls="ex" aria-expanded="false" aria-label="Toggle navigation">&#9776;</button>
						
						<div class="collapse navbar-toggleable-xs" id="ex">
							<ul class="nav nav-tabs">
								<li class="nav-item"><a class="nav-link" href="first" title="Home">Home</a></li>
								<li class="nav-item"><a class="nav-link" href="about" title="About UtterEdits">About</a></li>
								<li class="nav-item"><a class="nav-link" href="services" title="Services">Services</a></li>
								<li class="nav-item"><a class="nav-link" href="portfolio" title="Portfolio">Portfolio</a></li>
								<li class="nav-item"><a class="nav-link" href="first#contact">Contact</a></li>
								<li class="nav-item"><a class="nav-link active" href="getq" title="Get Quotation"> Get Quotation </a></li>
								<li class="nav-item dropup">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" title="Click for More">More</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="tus" title="Try us out"> Try us out </a>
										<a class="dropdown-item" href="pricing" title="Pricing (Price Chart)"> Pricing </a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				
				</div>
			</div>
		
		</div>	
			
		<div class="animated fadeInUp">

			<div class="container-fluid form" style=" margin-top:10px;">
				<center> 
					<font style="font-size: 3.5vh;">
						<b> <div data-aos="flip-left" data-aos-duration="2000">Get Your Quotation</div> </b> 
					</font> 
				</center>
				<br>
				
				<?php
					if(isset($_SESSION["alert"]) && $_SESSION["alert"]==1)
					{
						echo 	"<div class='alert alert-success' role='alert'>
									<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
									<strong>Thank You!</strong> Your form has been submitted successfully. We'll be send you quotation by email soon.
								</div>";
					}
					
					if(isset($_SESSION["alert"]) && $_SESSION["alert"]==2)
					{
						echo 	"<div class='alert alert-danger' role='alert'>
									<a href='#' class=close data-dismiss=alert aria-label=close>&times;</a>
									<strong>Error !</strong> Sorry, your form is not submitted, please try again.
								</div>";
					}
				?>
				
				<form action="getq_data" method="post" name="myfrm">
					<div class="row">
						<div class="animated fadeInLeftBig">
							<div class="col-md-6">
								<div class="form-group">
									<div class="row">
										<label class="col-sm-4" for="iname"> Name * </label>
										
										<div class="col-sm-8">
											<input type="text" class="form-control" required id="iname" name="name" placeholder="Full Name"onkeypress="return onKeyValidate(event,alphadott);" maxlength="40">
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="animated fadeInRightBig">
							<div class="col-md-6">
								<div class="form-group">
									<div class="row">
										<label class="col-sm-4" for="iemail"> E-Mail * </label>
										
										<div class="col-sm-8">
											<input type="email" class="form-control" required id="iemail" name="email" placeholder="E-Mail Address"maxlength="40">
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					
					<div class="row">
						<div class="animated fadeInLeftBig">
							<div class="col-md-6">
								<div class="form-group">
									<div class="row">
										<label class="col-sm-4" for="icontact"> Contact Num. * </label>
										
										<div class="col-sm-8">
											<input type="text" class="form-control" required id="icontact" name="contact" placeholder="Contact Number" maxlength="40">
										</div>
									</div>
								</div>
							</div>
						</div>	
							
						<div class="animated fadeInRightBig">
							<div class="col-md-6">	
								<div class="form-group">
									<div class="row">
										<label class="col-sm-4" for="icname"> Company Name * </label>
										
										<div class="col-sm-8">
											<input type="text" class="form-control" required id="icname" name="cname" placeholder="Company Name"onkeypress="return onKeyValidate(event,alphadott);"maxlength="40">
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					
					<div class="row">
						<div class="animated fadeInLeftBig">
							<div class="col-md-6">
								<div class="form-group">
									<div class="row">
										<label class="col-sm-4" for="ict"> City * </label>
										
										<div class="col-sm-8">
											<input type="text" class="form-control" required id="ict" name="ct" placeholder="City"onkeypress="return onKeyValidate(event,alphadott);"maxlength="40">
										</div>
									</div>
								</div>
							</div>
						</div>	
						
						<div class="animated fadeInRightBig">
							<div  class="col-md-6">
								<div class="form-group">
									<div class="row">
										<label class="col-sm-4" for="icountry"> Country * </label>
										
										<div class="col-sm-8">
											<input type="text" class="form-control" required id="icountry" name="country" placeholder="Country"onkeypress="return onKeyValidate(event,alphadott);"maxlength="40">
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
					
					<div class="row">
						<div class="animated fadeInLeftBig">
							<div class="col-md-6">
								<div class="form-group">
									<div class="row">
										<label class="col-sm-4" for="isid"> Skype ID </label>
										
										<div class="col-sm-8">
											<input type="text" class="form-control" id="isid" name="sid" placeholder="Skype ID" maxlength="40">
										</div>
									</div>
								</div>
							</div>
						</div>	
					
						<div class="animated fadeInRightBig">
							<div class="col-md-6">
								<div class="form-group">
									<div class="row">
										<label class="col-sm-4" for="ioid"> Other ID </label>
										
										<div class="col-sm-8">
											<input type="text" class="form-control" id="ioid" name="oid" placeholder="Other ID" maxlength="40">
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>	
					
					<div class="row">
						<div class="animated fadeInLeftBig">
							<div class="col-md-6">
								<div class="form-group">
									<div class="row">
										<label class="col-sm-4" for="inop"> Number of Photographs you want to edit * </label>
										
										<div class="col-sm-8">
											<input type="text" class="form-control" required id="inop" name="nop" placeholder="Number Of Photographs"onkeypress="return onKeyValidate(event,numeric);" maxlength="5">
										</div>
									</div>
								</div>
							</div>
						</div>	
						
						<div class="animated fadeInRightBig">
							<div class="col-md-6">
								<div class="form-group">
									<div class="row">
										<label class="col-sm-4" for="icat"> Category * </label>
										
										<div class="col-sm-8">
											<select class="form-control" required name="cat" id="icat">
												<option value=""> -- Select -- </option>
												<option value="Wedding Eidt"> Wedding Edit </option>
												<option value="Architectures Photoshoot"> Architectures Photoshoot </option>
												<option value="Special Request"> Special Request </option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>	
					
					<div class="animated fadeInLeftBig">
						<div class="form-group">
							<div class="row">
								<label class="col-sm-2" for="icomment"> Extra Comment / Note </label>
								
								<div class="col-sm-10">
									<textarea class="form-control" id="icomment" name="comment" placeholder="Extra Comment / Note"></textarea>
								</div>
							</div>
						</div>
					</div>	
					
					<div class="animated fadeInRightBig">
						<div class="form-group">
							<div class="row">
								<center>
									<input type="submit" class="btn btn-outline-primary" name="submit" value="Submit">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="reset" class="btn btn-outline-danger" name="cancel" value="Cancel">
								</center>	
							</div>
						</div>
					</div>	
					
				</form>
			</div>
				
		</div>	
		
		<?php include("footer.php"); ?>
	
	</body>

</html>

<?php $_SESSION["alert"]="";