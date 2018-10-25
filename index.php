<?php
    include "connect.php";
if(isset($_POST['subb']))
{

$email = $_POST['email'];


    $insert = mysql_query("insert into subscribe (email) values('$email')");
if(!$insert)
{
    echo mysql_error();
}
    else
    {
        echo "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Nikita Sharma</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		

	</head>

	<body class="header-collapse">
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<!---<img src="dummy/logo.png" alt="Site Title">-->
                        <img src="nlogo.png" alt="Site Title">
						<small class="site-description"><font color="white">My music my life.</font></small>
					</a> <!-- #branding -->
					
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="about.php">About</a></li>
							<li class="menu-item"><a href="gallery.php">Gallery</a></li>
							<li class="menu-item"><a href="#">Download</a></li>
							<li class="menu-item"><a href="#">Blog</a></li>
							<li class="menu-item"><a href="contact.php">Contact</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
			<div class="hero">
				<div class="slider">
					<ul class="slides">
						<li class="lazy-bg" data-background="images/n2.jpg">
							<div class="container">
								<h2 class="slide-title">Header goes here</h2>
								<h3 class="slide-subtitle">Less important text goes here</h3>
								<p class="slide-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Fugiat aliquid minus nemo sed est.</p>

								<a href="#" class="button cut-corner">Admin</a>
							</div>
						</li>
						<li class="lazy-bg" data-background="images/n7.jpg">
							<div class="container">
									<h2 class="slide-title">Header goes here</h2>
									<h3 class="slide-subtitle">Less important text goes here</h3>
									<p class="slide-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Fugiat aliquid minus nemo sed est.</p>

									<a href="#" class="button cut-corner">Admin</a>
							</div>
						</li>
						<li class="lazy-bg" data-background="images/n9.jpg">
							<div class="container">
									<h2 class="slide-title">Header goes here</h2>
									<h3 class="slide-subtitle">Less important text goes here</h3>
									<p class="slide-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Fugiat aliquid minus nemo sed est.</p>

									<a href="#" class="button cut-corner">Admin</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			
			<main class="main-content">
				<div class="fullwidth-block testimonial-section">
					<div class="container">
						<div class="quote-slider">
							<ul class="slides">
								<li>
									<blockquote>
										<p>“If music be the food of love, play on, Give me excess of it; that surfeiting, The appetite may sicken, and so die.”</p>
										<cite>William Shakespeare</cite>
										<span>Twelfth Night</span>
									</blockquote>
								</li>
								<li>
									<blockquote>
										<p>“If I were not a physicist, I would probably be a musician. I often think in music. I live my daydreams in music. I see my life in terms of music.”</p>
										<cite>Albert Einstein</cite>
										<span>Music</span>
									</blockquote>
								</li>
                                <li>
									<blockquote>
										<p>“And those who were seen dancing were thought to be insane by those who could not hear the music.”</p>
										<cite>Friedrich Nietzsche</cite>
										<span>Music</span>
									</blockquote>
								</li>
							</ul>
						</div>
					</div>
				</div> <!-- .testimonial-section -->
<!-------
<div class="post_body">

    <?php
        include("connect.php");
    
    $query = "select * from posts order by rand() LIMIT 0,4";
    
    $run = mysql_query($query);
    
    while ($row=mysql_fetch_array($run)){
        $post_id = $row['post_id'];
        $title = $row['post_title'];
        
        $author = $row['post_author'];
        
        $content = substr($row['post_content'],0,200);
    
    ?>
    
    <h2><a href="pages.php?id=<?php echo $post_id; ?>"><?php echo $title; ?></a></h2>
    
    <p align="right">Posted By:  &nbsp; <b><?php echo $author; ?></b>
    </p>
    
   
    <p align="justify">
        <?php echo $content; ?>
    </p>
    <p align="right"><a href="pages.php?id=<?php echo $post_id;?>">read more</a></p>
    <?php } ?>
</div>-------->
				<div class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
					<div class="container">
						<header class="section-header">
							<h2 class="section-title">Upcoming events</h2>

							<div class="event-nav">
								<a class="prev" id="event-prev" href="#"><i class="fa fa-caret-left"></i></a>
	    						<a class="next" id="event-next" href="#"><i class="fa fa-caret-right"></i></a>
							</div> <!-- .event-nav -->

						</header> <!-- .section-header -->
						
                        <div class="event-carousel">
							<?php
        include("connect.php");
    
    $query = "select * from posts";
    
    $run = mysql_query($query);
    
    while ($row=mysql_fetch_array($run)){
        $post_id = $row['post_id'];
        
        $title = $row['post_title'];
        
        $author = $row['post_author'];
        
        $content = substr($row['post_content'],0,200);
    
    ?>
							<div class="event">
								<div class="entry-date" style="height:100px;">
									<div class="date"><?php echo $title; ?><br/><span class="month"></span></div>
									
								</div>
								<h2 class="entry-title"><a href=""><?php echo $author; ?></a></h2>
								<p style=""><?php echo $content; ?></p>
							</div> <!-- .event -->
							
							
							
							
							
							
							
						<?php } ?>	
						</div> <!-- .event-carousel -->
					</div> <!-- .container -->
				</div> <!-- .upcoming-event-section -->

				<div class="fullwidth-block why-chooseus-section">
					<div class="container">
						<h2 class="section-title">Why choose us?</h2>

						<div class="row">
							<div class="col-md-4">
								<div class="feature">
									<figure class="cut-corner">
										<img src="images/n7.jpg" style="height:250px" alt="performance">
									</figure>
									<h3 class="feature-title">Performance</h3>
									<p>We believe that public performance helps students set and reach their goals and build confidence. Elmhurst Music Academy offers numerous recitals at no additional cost and students are given many solo performance opportunities.</p>
								</div> <!-- .feature -->
							</div>
							<div class="col-md-4">
								<div class="feature">
									<figure class="cut-corner">
										<img src="images/n2.jpg" style="height:250px" alt="Individual Approach">
									</figure>
									<h3 class="feature-title">Individual Approach</h3>
									<p>Our primary business is private lessons so that each student can progress at their own pace and teachers can adapt lessons to each student’s musical interest and learning style.</p>
								</div> <!-- .feature -->
							</div>
							<div class="col-md-4">
								<div class="feature">
									<figure class="cut-corner">
										<img src="images/n4.jpg" alt="Best Technique">
									</figure>
									<h3 class="feature-title">Best Technique</h3>
									<p>Our voice lessons focus on teaching healthy singing technique, which provides you with the foundation for performance in any style of music you love.</p>
								</div> <!-- .feature -->
							</div>
						</div>
					</div> <!-- .container -->
				</div> <!-- .why-chooseus-section -->
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<img src="flogo.png" alt="Site Name">
					
					<address>
						<p>Siliguri,India <br><a href="tel:354543543">(563) 429 234 890</a> <br> <a href="mailto:info@bandname.com">info@bandname.com</a></p> 
					</address> 
					
					<form action="index.php" method="post" class="newsletter-form">
						<input type="email" name="email" required placeholder="Enter your email to join newsletter..." required>
						<input type="submit" name="subb" class="button cut-corner" value="Subscribe">
					</form> <!-- .newsletter-form -->
					
					<div class="social-links">
						<a href="https://www.facebook.com/nikitasharmamusic/" target="_blank"><i class="fa fa-facebook-square"></i></a>
						<a href="https://twitter.com/itsNikitaSharma" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="https://www.youtube.com/channel/UCzOW_gw2QULjRknJc6I2p4A/featured" target="_blank"><i class="fa fa-youtube-play"></i></a>
						<a href="https://www.instagram.com/nikitasharmamusic/" target="_blank"><i class="fa fa-instagram"></i></a>
					</div> <!-- .social-links -->
					
					<p class="copy" style="color:white">Copyright 2018 Nikita Sharma. Designed by NazamIdrisi. All right reserved</p>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>