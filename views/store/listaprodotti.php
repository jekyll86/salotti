<?php 
require '/../core/init.php';
$general->logged_out_protect();
$prodotti		=$products->get_products(); //Array di prodotti
$product_count 	= count($prodotti);
print_r($prodotti) ;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css" >
	<title>Members</title>
</head>
<body>	
	<div id="container">
		<?php // include 'includes/menu.php';?>
		<h1>Tutti i prodotti</h1>
		<p>Ci sono <strong><?php echo $product_count; ?></strong> prodotti inseriti. </p>
 
		<p>I link non funzionano per ora</p>
		<?php 
 
		foreach ($prodotti as $prodotto) {
			$nome = $prodotto['nome'];
			?>
 
			<p><a href="profile.php?email=<?php echo $nome; ?>"><?php echo $nome?></a> Inserito il: <?php //echo date('F j, Y', $prodotto['time']) ?></p>
			
			<?php
		}
 
		?>
	</div>
</body>
</html>