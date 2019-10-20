
<h1>Page creation bdd</h1>
<a href="administration.php">Retour</a>

<form method="post" action="creer_base_de_donnee.php">
<p>Veuillez rentrer les informations de connexion a la base de donnee</br>

Server Name :</br>
<input type="text" name="servername" value="localhost" ></br>
User Name :</br>
<input type="text" name="username" value="root" ></br>
Password :</br>
<input type="text" name="password"></br>
Data Base Name :</br>
<input type="text" name="dbname" value="rush_00"></br>
</br>
<input type="submit" name="submit"></br>
</p>
</form>

<?php
if ($_POST['submit'] != null)
{
	include_once ('mysql_functions.php');
	$bdd_info['servername'] = $_POST['servername'];
	$bdd_info['username'] = $_POST['username'];
	$bdd_info['password'] = $_POST['password'];
	$bdd_info['dbname'] = $_POST['dbname'];
	$str = serialize($bdd_info);
	file_put_contents("bdd_info", $str);
	$bdd_info = get_bdd_info();
	$conn = mysqli_connect($bdd_info['servername'], $bdd_info['username'], $bdd_info['password']);
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
	//************************************************************************
	// sql to create table
	// creation de la table categories : id, nom
	//************************************************************************
	$sql = "CREATE TABLE `rush_00`.`categories` ( `id` INT NOT NULL AUTO_INCREMENT , `nom` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";

	if (mysqli_query($conn, $sql)) {
		echo "Table MyGuests created successfully";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
	}
	//************************************************************************
	// sql to create table
	// creation de la table products : id, name, categorie, price, statut, stock, descriptiion, photoh
	//************************************************************************
	$sql = "CREATE TABLE `rush_00`.`products` ( `id` INT NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `categorie` VARCHAR(255) NOT NULL , `price` INT NOT NULL , `statut` VARCHAR(255) NOT NULL , `stock` INT NOT NULL , `description` TEXT NOT NULL , `photo` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";

	if (mysqli_query($conn, $sql)) {
		echo "Table MyGuests created successfully";
	} else {
		echo "Error creating table: " . mysqli_error($conn);
	}
}
?>
