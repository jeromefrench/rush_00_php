<?php
echo "<h1>Page ajout categorie</h1>";

require_once ('mysql_functions.php');
$bdd_info = get_bdd_info();
$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);
echo "On va ajouter la categorie ==>".$_POST['categorie_name']."</br>";
create_categorie($_POST['categorie_name'], $conn);
?>
