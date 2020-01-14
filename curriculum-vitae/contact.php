<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content=width=device-width, initial-scale=1.0>
		<title>curriculum vitae</title>
		<!-- lien fichier css -->
		<link rel="stylesheet" href="src/css/main.css">
		<!-- font -->
		<!-- header font and h1 -->
		<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
		<!-- nav and body text -->
		<link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">	
		<link href="https://fonts.googleapis.com/css?family=Arapey&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
			<h1>Ayman bratzu</h1>
			<h2>web develloppeur</h2>
		</header>
		<nav>
			<div class="table">
				<ul>
					<li class="menu-ind">
						<a href="index.html">Présentation</a>
					</li>
					<li class="menu-hob">
						<a href="hobbies.html">Loisirs</a>
					</li>
					<li class="menu-con">
						<a href="contact.php">Contactez-moi</a>
					</li>
				</ul>
			</div>
		</nav>
		<section class="vert">
			<h1>Contactez moi</h1>
			<div class="sec">
				<p>Mon profil vous intéresse ?</p>
				<p> N'hesitez pas a me contacter à l'adresse suivante: <strong><A HREF="mailto:aymanbratzu@yahoo.fr">aymanbratzu@yahoo.fr</A></strong></p>
				<p>Je vous répondrai dans les meilleurs délais.</p>
			</div>
		</section>
		<section class="bleu">
			<h1>Mon LinkedIn & Github</h1>
			<div class="sec">
				<br>
				<center>
						<a target="_blank" 	href="https://github.com/xansyem"><span style=" color:black;"><i class="fab fa-github fa-8x"></i></span></a>
						<a target="_blank" 	href="https://www.linkedin.com/in/ayman-bratzu-84a540197/"><span style=" color:black;"><i class="fab fa-linkedin fa-8x"></i></span></a>
				</center>
			</div>
		</section>
		<section class="rouge">
			<h1>Ou bien</h1>
			<div class="sec">
				<center>
				<div class="contactbulle">
					<h2 class="h2contact">Formulaire de contact !</h2>
					<form method="POST" action="">
						<input type="text" name="nom" placeholder="Votre nom"/><br/><br/>
						<input type="email" name="mail" placeholder="Votre email"/><br /><br />
						<textarea rows="10" cols="50" name="message" placeholder="Votre message"></textarea><br /><br />
						<input class="boutongo" type="submit" value="Envoyer !" name="mailforms"/>
					</form>
				</div>
				</center>
			</div>
		</section>
		<!-- fontawesome -->
		<script src="https://kit.fontawesome.com/1bb2b145c7.js" crossorigin="anonymous"></script>
		<!-- lien js -->
		<script src="src/js/main.js"></script>
		<!-- particles.js -->
		<script src="src/js/particles.js"></script>
		<script src="src/js/app.js"></script>
		<script src="src/js/particles.min.js"></script>
	</body>
	<footer>
		<p>Copyright 2019 Ayman Bratzu - Toute reproduction interdite</p>
		<a target="_blank" 	href="https://www.linkedin.com/in/ayman-bratzu-84a540197/"><span style=" color:black;"><i class="fab fa-linkedin fa-3x"></i></span></a>
		<a target="_blank" href="https://github.com/xansyem"><span style=" color:black;" ><i class="fab fa-github-square fa-3x"></i></span></a>
	</footer>
</html>