<?php
require_once ('mysql_functions.php');
echo "<h1>Page ajout product</h1>";
echo '<p><a href="administration.php">Retour</a></p>';

$bdd_info = get_bdd_info();
$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);
/***** RECUPERER LES CATEGORIES POUR CATERGORIES DU PRODUIT *****/


echo "<p>Le produit suivant a ete ajouter : </br></br>" 
	."Nom =>". $_POST['product_name'] ."</br>"
	."Categorie =>". $_POST['product_categorie'] ."</br>"
	."Prix =>". $_POST['product_price'] ."</br>"
	."Statut =>". $_POST['product_statut'] ."</br>"
	."Stock =>". $_POST['product_stock'] ."</br>"
	."Description =>". $_POST['product_description']."</br>"
	.""."</br></p>";


create_product($_POST['product_name'], $_POST['product_categorie'], $_POST['product_price'], $_POST['product_statut'], $_POST['product_stock'], $_POST['product_description'], $_POST['product_photo'], $conn);

?>
