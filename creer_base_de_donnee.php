
<h1>Page creation bdd</h1>
<a href="administration.php">Retour</a>
<?php

include ('mysql_functions.php');

$bdd_info = get_bdd_info();

echo "try to Create connection</br>";
$conn = mysqli_connect($bdd_info['servername'], $bdd_info['username'], $bdd_info['password']);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "Connexion reussi !</br>";

$sql = "CREATE DATABASE rush_00";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

echo "hello";
// sql to create table
$sql = "CREATE TABLE `rush_00`.`categories` ( `id` INT NOT NULL AUTO_INCREMENT , `nom` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";

if (mysqli_query($conn, $sql)) {
	echo "Table MyGuests created successfully";
} else {
	echo "Error creating table: " . mysqli_error($conn);
}



?>
