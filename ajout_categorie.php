<?php
echo "<h1>Page ajout categorie</h1>";
echo '<p><a href="administration.php">Retour</a></br>';

require_once ('mysql_functions.php');
$bdd_info = get_bdd_info();
$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);
echo "La categorie ==>".$_POST['categorie_name']."a ete ajouter</br></p>";
create_categorie($_POST['categorie_name'], $conn);
?>
