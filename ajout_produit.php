<?php
/*
echo "page ajout produit hhhttadfalth</br>";
echo "hello";

require ('mysql_functions.php');
connection_bdd("localhost", "root", "rootpasswd", "rush_00");*/



echo "page ajout product</br>";
echo "hello";

require_once ('mysql_functions.php');

$bdd_info = get_bdd_info();
var_dump($bdd_info);
$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);


/***** RECUPERER LES CATEGORIES POUR CATERGORIES DU PRODUIT *****/
echo "on va ajouter des produits==>" . $_POST['product_name'] . $_POST['product_categorie'] . $_POST['product_price'] . $_POST['product_statut'] . $_POST['product_stock'] . $_POST['product_description']."</br>";
 $_POST['product_photo'] . "</br>";
create_product($_POST['product_name'], $_POST['product_categorie'], $_POST['product_price'], $_POST['product_statut'], $_POST['product_stock'], $_POST['product_description'], $_POST['product_photo'], $conn);
/***** RECUPERER LES CATEGORIES POUR CATERGORIES DU PRODUIT  *****/

?>
