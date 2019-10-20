<?php
if(!isset($_SESSION))
  session_start()

require ('mysql_functions.php');

$bdd_info = get_bdd_info();
$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);


var_dump($_GET);

?>
