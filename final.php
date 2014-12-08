<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>We hack EULA!</title>
		<link href="bootstrap/css/style.css" rel="stylesheet">
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script src = "bootstrap/js/map.js"> </script>
		<?php include 'assets.php'; ?>
	</head>
	<body>
		<div id="page">
			<header id="header" class="site-header">
				<nav id="navbar" class="site-navbar navbar navbar-static-top navbar-fixed-top" role="navigation">
					<div class="container">
						<div class="row">
							<div class="navbar-header pull-right">
								<h1 class="navbar-brand">
									<i class="fa fa-power-off"></i> 
									<a href="index.php">Team 3</a>
								</h1>
							</div>
							<div class = "pull-left">
								<button id = "menu-button" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<i class="fa fa-bars"></i>
								</button>
							</div>
							<div class = "large-menu">
								<ul id="navigation-large" class="nav navbar-nav navbar-left">
									<li class="active"><a href="#header" class="current">Home</a></li>
									<li><a href="#about">About</a></li>
									<li><a href="#idea">Idea</a></li>
									<li><a href="#" onClick="window.location.href = 'menuAlt.php';">More Fun</a></li>
									<li><a href="#footer">Contact</a></li>
								</ul>
							</div>
						</div>
						<div id="navbar-collapse-1" class="collapse navbar-collapse small-menu">
							<ul id="navigation-small" class="nav navbar-nav navbar-left">
								<li class="active"><a href="#header" class="current">Home</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#idea">Idea</a></li>
								<li><a href="#" onClick="window.location.href = 'menuAlt.php';">More Fun</a></li>
								<li><a href="#footer">Contact</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</header>
			<main id="main" class="site-main">
				<section id="carousel-1" class="carousel slide section-slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active" style="background: url(images/cluj/poza1.png) no-repeat center; background-size: cover;">
                          <div class="container"><img src="images/typo-none.png" alt="First slide"></div>
                        </div>
                        <div class="item" style="background: url(images/cluj/poza2.png) no-repeat center; background-size: cover;">
                          <div class="container"><img src="images/typo-none.png" alt="First slide"></div>
                        </div>
                        <div class="item" style="background: url(images/cluj/poza3.png) no-repeat center; background-size: cover;">
                         <div class="container"><img src="images/typo-none.png" alt="First slide"></div> 
                        </div>
                         <div class="item" style="background: url(images/cluj/poza.png) no-repeat center; background-size: cover;">
                         <div class="container"><img src="images/typo-none.png" alt="First slide"></div> 
                        </div>
					</div>
					<a class="left carousel-control" href="#carousel-1" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
					<a class="right carousel-control" href="#carousel-1" data-slide="next"><span class="fa fa-chevron-right"></span></a>
			    	</section>
				</section>
				<section class="section section-center section-cta">
					<div class="container">
						<h2 class="section-title"><span>We present to you the amazing city of Cluj-Napoca!</span></h2>
						<p>Cluj-Napoca, commonly known as Cluj, is the second most populous city in Romania, after the national capital Bucharest, and the seat of Cluj County in the northwestern part of the country.
							Located in the Someșul Mic River valley, the city is considered the unofficial capital to the historical province of Transylvania.
						</p>
						<div class="main-action row">
							<div class="col-md-3 col-md-offset-3 col-sm-4 col-sm-offset-2"><a href="" class="smooth-scroll btn btn-lg btn-block btn-danger">View Map</a></div>
							<div class="col-md-3 col-sm-4"><a href="http://www.europeanyouthcapital.org/?s=cluj" class="smooth-scroll btn btn-lg btn-block btn-default" target="_blank">Youth @ Cluj - Napoca</a></div>
						</div>
					</div>
				</section>
				<section class="map-canvas-section">
					<div id="map-canvas">
					</div>
				</section>
				<section id="about" class="section section-center section-hilite section-testimonial">
					<div class="container">
						<h2 class="section-title"><span>What do the creators think?</span></h2>
						<i class="fa fa-quote-left fa-3x"></i>
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<blockquote>
										<p>It's the place where magic happens... It's the next huge thing. If you haven't visited Cluj-Napoca yet, you should definately do so. Otherwise 'Dracula' will hunt you down and nobody escaped 'Dracula' as far as I know!</p>
										<small>Alexandru Bondor<cite title="Source Title"> A Do-It-Yourselfer</cite></small>
									</blockquote>
								</div>
								<div class="item">
									<blockquote>
										<p>Due to its location on important trade routes, Cluj-Napoca nowadays attracts again businesses from all over Europe. Not only the largest university of Romania can be found here, but also quite a few other state and private educational institutions.</p>
										<small>Adrian Rus<cite title="Source Title"> Folk Dancer at "Traditii"</cite></small>
									</blockquote>
								</div>
								<div class="item">
									<blockquote>
										<p>This beautiful fascinating city is a most beautiful town of Romania, and a typical part of Transylvania. Cluj-Napoca is the economic centre of the region, and a very old city.</p>
										<small>Mihai Hanga<cite title="Source Title"> Fishing Enthuziast</cite></small>
									</blockquote>
								</div>
							</div>
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"><img src="images/final/avatar-1.png" width="64" height="64" alt="" class="img-circle"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"><img src="images/final/avatar-2.png" width="64" height="64" alt="" class="img-circle"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"><img src="images/final/avatar-3.png" width="64" height="64" alt="" class="img-circle"></li>
							</ol>
						</div>
					</div>
				</section>
				<section id = "idea" class="section section-center section-cta">
					<div class="container">
						<h2 class="section-title"><span>Our idea</span><i class="fa fa-lightbulb-o"></i></h2>
						<h4>The idea of creating an interactive way of reading EULA, TOS and so on (cuz nobody reads them) sounded great for us from the very beginning.
						So, after a hard 'storm of brains' we came up with the idea! <br/><br/> 
						<i>'What if we won't offer anything for the user, except a 'broken page' until 
						the user actually reads the TOS.. So we came up with some mini-games in order to satisfy
						everybodys' taste!', Team 3
						</h4>
					</div>
				</section>
				<section id="team" class="section section-center section-hilite section-team">
					<div class="container">
						<h2 class="section-title"><span>Our Team</span></h2>
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<img src="images/final/mihai.jpg">
								<h5>Mihai Hanga</h5>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<img src="https://camo.githubusercontent.com/17a8aa65e19d57a8fe22bba37439d9f33d8ec2ca/687474703a2f2f676f6f2e676c2f374b446d5237">
								<h5>Alexandru Bondor</h5>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<img src="images/final/adi.jpg">
								<h5>Adrian Rus</h5>
							</div>
						</div>
					</div>
				</section>
			</main>
			<footer id="footer" class="site-footer">
				<div class="container">
					<div id="sidebar-footer-1">
						<div class="row">
							<aside class="widget col-md-3 col-sm-6">
								<h5 class="widget-title">About Us</h5>
								    <p>We are a 3 students team that is guided by motto: ‘We are a team, we win as a team, we lose as a team" (Mourinho)</p>
							</aside>
							<aside class="widget col-md-3 col-sm-6">
								<h5 class="widget-title">Contact</h5>
								<div class="textwidget">
									<div class="adr">
										<div class="street-address">26 Breaza St</div>
										<span class="locality">Cluj-Napoca</span>,
										<abbr class="region" title="Cluj-Napoca">CJ</abbr>,
										<span class="postal-code">400263</span>,
										<span class="country-name">ROMANIA</span>
									</div>
									<div>Phone: <span class="tel"> 0189-432-331. </span></div>
								
								</div>
							</aside>
							<aside class="widget col-md-3 col-sm-6">
								<h5 class="widget-title">Need Help?</h5>
								<p>For any question you have, please feel free to contact us!</p>
							</aside>
							<aside class="widget col-md-3 col-sm-6">
								<h5 class="widget-title">Get in touch</h5>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Your Email">
									<span class="input-group-btn">
									<button class="btn btn-danger" type="button"><i class="fa fa-arrow-right"></i></button>
									</span>
								</div>
								<ul class="social-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</aside>
						</div>
					</div>
					<div class="copyright">
						<p>© 2014 Team 3 Corporation</p>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>