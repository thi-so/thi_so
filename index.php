<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Chez SO & Thi</title>
	<meta name="description" content="">
	<meta name="viewport" content="initial-scale=1">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!-- Librairies Jquery -->
	<script src="js/jquery.bxslider.min.js"></script>
	<link href="css/normalize.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/jquery.bxslider.css" rel="stylesheet" />
	<script>
		$(document).ready(function(){
			$('.bxslider').bxSlider();
		});
	</script>
</head>

<body role="document">

	<header role="banner">
		<div class="wrapper">

			<a href="#" rel="home"><h1><img src="images/logo.png" alt="Chez So & Thi" class="logotype"></h1></a>

			<div class="btn-nav">
                    <div class="inner"></div>
                </div>
			<nav role="navigation">	<?php $page = 'home'; include("header.php"); ?> </nav>
		</div>
	</header>
	<section role="main">

		<div id="slider">
			<!-- SLIDER -->
			<ul class="bxslider">
				<li><img src="images/image1.jpg" /></li>
				<li><img src="images/image2.jpg" /></li>
			</ul>
		</div>

		<div id="par-pays">

			<h2>Les recettes par pays</h2>
			<div class="drapeaux">
				<a href=""><img src="images/pays/vietnam.jpg" alt="Vietnamien"/></a>
				<a href=""><img src="images/pays/laos.jpg" alt="Laotien"/></a>
				<a href=""><img src="images/pays/coree.jpg" alt="Coréen"/></a>
				<a href=""><img src="images/pays/inde.jpg" alt="Indien"/></a>
				<a href=""><img src="images/pays/thailande.jpg" alt="Thaïlandais"/></a>
				<a href=""><img src="images/pays/japon.jpg" alt="Japonais"/></a>
			</div>
		</div>
	</section>
nckqdcnlkdnclkdnslk
	<section role="newsletter">
		<button id="btn-newsletter">Newsletter</button>
	</section>

	<footer role="footer">
		<?php include("footer.php"); ?>
	</footer>

</body>
</html>