<?php

require ('mysql_functions.php');

$bdd_info = get_bdd_info();
$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);

?>

<html>
	<head meta charset="utf-8" />
	<title>SERIAL EATER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<nav>
			<ul>
				<li class="nav_hover"><a href="index.php" >HOME</a></li>
				<li class="nav_hover"><a href="inscription.php" >JOIN US !</a></li>
				<li class="on"><a href="panier.php" >PANIER</a></li>
				<li class="nav_hover"><a href="login.php" >LOG IN</a></li>
				<li class="admin"><a href="administration.php">ADMIN</a></li>
			</ul>
		</nav>


 liste des produits que le client souhaite acquérir
 le prix et

	la quantité de chaque article,

	 ainsi que le coût total.

	 Il doit aussi contenir un bouton de validation pour archiver la commande.> ramenera au log

	</body>
</html>
