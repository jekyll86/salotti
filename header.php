<?php
require 'views/core/init.php';
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title><?php
if (isset($title))
	echo 'Prodotto ' . $title;
?> Alessi salotti</title>

<!-- Bootstrap core CSS -->
<link href="<?=curURL() ?>css/bootstrap.css" rel="stylesheet">

<!-- Add custom CSS here -->
<link href="<?=curURL() ?>css/modern-business.css" rel="stylesheet">
<link rel="stylesheet"
	href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" />
<link href="<?=curURL() ?>css/style.css" rel="stylesheet">

<!-- Google Prettify -->
<link
	href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.css"
	type="text/css">

<!-- include summernote css/js-->
<link rel="stylesheet" href="<?=curURL() ?>css/summernote.css" />

</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-image: url('<?= CurUrl() ?>images/background_top.png')">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
				<a class="navbar-brand" href="index.html"><img id="logo"
					src="<?=curURL() ?>images/logo.png" /> </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?=curUrl() ?>index.php">Home</a>
					</li>
					<?php
					$curUrl = curURL();
					if ($general -> logged_in() === true) : ?>
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown">Prodotti <b class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><a href="<?=curUrl() ?>aggiungi/prodotto.html">Aggingi
									prodotto</a>
							</li>
							<li><a href="<?=curUrl() ?>listaprodotti.html">Lista Prodotti</a>
							<li><a href="<?=curUrl() ?>prodotti.html">Tutti i Prodotti</a>
							</li>
							<li><a href="<?=curUrl() ?>prodotto/sofa/divano1.html">Sofa</a>
							</li>
							<li><a href="<?=curUrl() ?>prodotto/bed/letto1.html">Bed</a>
							</li>
						</ul>
					</li>

					<li><a href="<?=curUrl() ?>logout.html">Logout</a>
					
					<li><a href="<?=curUrl() ?>members.html">Lista utenti</a></li>

					<?php else : ?>


					<li><a href="<?=curUrl() ?>register.html">Registrati</a>
					</li>
					<li><a href="<?=curUrl() ?>login.html">Login</a>
					</li>

					<?php endif; ?>

					<li><a href="<?=curUrl() ?>contact.html">Contatti</a>
					</li>


				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<div style="height: 50px;">&nbsp;</div>