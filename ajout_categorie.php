<?php

echo "page ajout categorie</br>";
echo "hello";

include ('mysql_functions.php');


$bdd_info = get_bdd_info();
var_dump($bdd_info);
$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);

echo "on va ajouter la categorie ==>".$_POST['categorie_name']."</br>";
create_categorie($_POST['categorie_name'], $conn);


?>



