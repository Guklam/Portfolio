<?php 
include('includes/const_html.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Template portfolio</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/particles.css">
		<link rel="stylesheet" type="text/css" href="css/media_query_main.css">
		<link rel="icon" href="img/favicon.ico">
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/typeit@5.5.2/dist/typeit.min.js"></script>
	</head>
	<body>
		<!-- Conteneur -->
		<div class="main">
			
			<!-- Page "principale" -->
			<div id="main-page" class="bg-main">
				<div id="menu">
					<a class="logo" href="#"><i class="fas fa-code"></i> <?php echo $prenom_nom; ?></a>
					<div id="nav-icon" class="menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<div id="particles-js"></div>
				<div class="main-element">
					<h1 class="main-text"><?php echo $prenom_nom; ?></h1>
					<p class="main-text-work" id="presentation"></p>
				</div>
				<div class="arrow-icon"><a class="js-scrollTo" href="#me"><i class="fas fa-angle-down"></i></a></div>
			</div>


			<!-- Page "compétences" -->
			<div id="me" class="bg-main">
				<div class="main-me">
					<h3 class="title">Mes compétences</h3>
					<div class="block-me">
						<i class="fas fa-handshake"></i>
						<p>I collaborate with clients and peers to nurture and transform ideas into well thought out design specs. After all, that's where the majority of amazing user experiences start.</p>
					</div>
					<div class="block-me">
						<i class="fas fa-pencil-alt"></i>
						<p>I sketch and wireframe interfaces focusing on content structure, intuitive UI patterns and simple interactions. I'm a minimalist who truly believes that less is more.</p>
					</div>
					<div class="block-me">
						<i class="fas fa-code"></i>
						<p>I design in the browser with HTML(5), CSS(3) and a touch of JavaScript. I love coding things from scratch, but I can work with front-end frameworks like Bootstrap too.</p>
					</div>
				</div>
			</div>


			<!-- Page "Travaux" -->
			<div id="works" class="bg-main">
				<div class="grid-wrapper">
					<div class="grid-items overlay-img">
						<a href="#"><img src="http://via.placeholder.com/600x400" alt=""></a>
						<div class="overlay-text">
							<div class="text">Hello world!</div>
						</div>
					</div>
					<div class="grid-items overlay-img">
						<a href="#"><img src="http://via.placeholder.com/600x400" alt=""></a>
						<div class="overlay-text">
							<div class="text">Hello world!</div>
						</div>
					</div>
					<div class="grid-items overlay-img">
						<a href="#"><img src="http://via.placeholder.com/600x400" alt=""></a>
						<div class="overlay-text">
							<div class="text">Hello world!</div>
						</div>
					</div>
					<div class="grid-items overlay-img">
						<a href="#"><img src="http://via.placeholder.com/600x400" alt=""></a>
						<div class="overlay-text">
							<div class="text">Hello world!</div>
						</div>
					</div>
					<div class="grid-items overlay-img">
						<a href="#"><img src="http://via.placeholder.com/600x400" alt=""></a>
						<div class="overlay-text">
							<div class="text">Hello world!</div>
						</div>
					</div>
					<div class="grid-items overlay-img">
						<a href="#"><img src="http://via.placeholder.com/600x400" alt=""></a>
						<div class="overlay-text">
							<div class="text">Hello world!</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Page "Contact" -->
			<div id="contact" class="bg-main">
				<div class="form-contact">
					<h2>Contact</h2>
					<form action="#" method="post">
						<input type="text" placeholder="Name">
						<input type="email" placeholder="Email">
						<textarea name="#" id="#" placeholder="Your message"></textarea>
						<button type="submit" class="btno btno-primary btn-block">Submit</button>
					</form>
				</div>
			</div>


			<!-- Page "Footer" -->
			<div id="footer" class="bg-main">
				<div class="icon-social">
				<h3>Social links</h3>
					<a href="<?php echo $url_facebook; ?>"><i class="fab fa-facebook-f"></i></a>
					<a href="<?php echo $url_twitter; ?>"><i class="fab fa-twitter"></i></a>
					<a href="<?php echo $url_github; ?>"><i class="fab fa-github"></i></a>
					<a href="<?php echo $url_instagram; ?>"><i class="fab fa-instagram"></i></a>
					<a href="<?php echo $url_linkedin; ?>"><i class="fab fa-linkedin"></i></a>
				</div>
				<div id="copyright"><?php echo $prenom_nom; ?>, 2018-<?php echo date("Y"); ?>.</div>
			</div>


			<!-- Menu en overlay-->
			<div id="overlay">
				<div>
					<ul>
						<li><a href="#me">Présentation</a></li>
						<li><a href="#works">Travaux</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
			

			<!-- Flèche de navigation -->
			<div id="arrow-to-up">
				<span class="arrow-up"><a href="#main-page" class="js-scrollTo"><i class="fas fa-arrow-up"></i></a></span>
			</div>

		</div>
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
		<script src="js/jquery_functions.js"></script>
	</body>
</html>