<?php
require_once ('mysql_functions.php');
echo "<h1>Page ajout product</h1>";
echo '<a href="administration.php">Retour</a>';

$bdd_info = get_bdd_info();
$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);
/***** RECUPERER LES CATEGORIES POUR CATERGORIES DU PRODUIT *****/
echo "on va ajouter des produits==>" . $_POST['product_name'] . $_POST['product_categorie'] . $_POST['product_price'] . $_POST['product_statut'] . $_POST['product_stock'] . $_POST['product_description']."</br>";

 $_POST['product_photo'] . "</br>";

create_product($_POST['product_name'], $_POST['product_categorie'], $_POST['product_price'], $_POST['product_statut'], $_POST['product_stock'], $_POST['product_description'], $_POST['product_photo'], $conn);

?>
