<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Gallery | Nikita Sharma</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img src="nlogo.png" alt="Site Title">
						<small class="site-description">My music my life.</small>
					</a> <!-- #branding -->
					
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="about.php">About</a></li>
							<li class="menu-item current-menu-item"><a href="gallery.php">Gallery</a></li>
							<li class="menu-item"><a href="#">Download</a></li>
							<li class="menu-item"><a href="#">Blog</a></li>
							<li class="menu-item"><a href="contact.php">Contact</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
			<main class="main-content">
				<div class="fullwidth-block gallery">
					<div class="container">
						<div class="content fullwidth">
							<h2 class="entry-title">Gallery</h2>
							<div class="filter-links filterable-nav">
								<select class="mobile-filter">
									<option value="*">Show all</option>
									<option value=".concert">Concert</option>
									<option value=".band">Band</option>
									<option value=".stuff">Stuff</option>
								</select>
								<a href="#" class="current" data-filter="*">Show all</a>
								<a href="#" data-filter=".concert">Concert</a>
								<a href="#" data-filter=".band">Band</a>
								<a href="#" data-filter=".stuff">Stuff</a>
							</div>
							<div class="filterable-items">
								<div class="filterable-item concert">
									<a href="images/n1.jpg"><figure><img src="images/n1.jpg" alt="gallery 1"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href="images/n2.jpg"><figure><img src="images/n2.jpg" alt="gallery 2" style="height:260px"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href="images/n3.jpg"><figure><img src="images/n3.jpg" alt="gallery 3"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href="images/n8.jpg"><figure><img src="images/n8.jpg" alt="gallery 4" style="height:260px"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href="images/n5.jpg"><figure><img src="images/n5.jpg" alt="gallery 5" style="height:260px"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href="images/n6.jpg"><figure><img src="images/n6.jpg" alt="gallery 6"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href="images/n7.jpg"><figure><img src="images/n7.jpg" alt="gallery 7"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href="images/n8.jpg"><figure><img src="images/n8.jpg" alt="gallery 8"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href="images/n9.jpg"><figure><img src="images/n9.jpg" alt="gallery 9" style="height:260px"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href="images/n10.jpg"><figure><img src="images/n10.jpg" alt="gallery 10"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href="images/n11.jpg"><figure><img src="images/n11.jpg" alt="gallery 11"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href="images/n2.jpg"><figure><img src="images/n2.jpg" alt="gallery 12" style="height:260px"></figure></a>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<img src="flogo.png" alt="Site Name">
					
					<address>
						<p>Siliguri,India  <br><a href="tel:354543543">(000) 000 000 000</a> <br> <a href="mailto:info@bandname.com">info@bandname.com</a></p> 
					</address> 
					
					<form action="#" class="newsletter-form">
						<input type="email" placeholder="Enter your email to join newsletter...">
						<input type="submit" class="button cut-corner" value="Subscribe">
					</form> <!-- .newsletter-form -->
					
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook-square"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div> <!-- .social-links -->
					
					<p class="copy">Copyright 2018 Nikita Sharma. Designed by NazamIdrisi. All right reserved</p>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>