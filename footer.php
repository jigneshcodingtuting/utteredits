
		<footer class="footer">
			<nav class="navbar navbar-full navbar-light bg-inverse">
				<center>
					<a href="#top" title="Go To Top"><img src="img/arrowup.png" style="margin-top:15px"></a>
					<nav class="nav nav-inline" style="margin-top:15px">
						<a class="nav-link" href="first" title="Home">Home</a>
						<a class="nav-link" href="about" title="About UtterEdits">About</a>
						<a class="nav-link" href="services" title="Services">Services</a>
						<a class="nav-link" href="portfolio" title="Portfolio">Portfolio</a>
						<a class="nav-link" href="first#contact">Contact</a>
						<a class="nav-link" href="getq">Get Quotation</a>
						<a class="nav-link" href="tus" title="Try us out"> Try us out  </a>
						<a class="nav-link" href="pricing" title="Pricing (Price Chart)"> Pricing </a>
					</nav>
				</center>
				<p class="navbar-text text-xs-center" style="color:white; padding-top:18px">Powered By</b> @ AITS & JP Tech</p>
			</nav>
		</footer>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
		
		<script>
			$(function() {
			  $('a[href*="#"]:not([href="#"])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				  var target = $(this.hash);
				  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				  if (target.length) {
					$('html, body').animate({
					  scrollTop: target.offset().top
					}, 1000);
					return false;
				  }
				}
			  });
			});
		</script>
	