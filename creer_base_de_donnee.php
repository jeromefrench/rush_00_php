
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

/* var_dump($_POST); */


if ($_POST['submit'] != null)
{
	$bdd_info['servername'] = $_POST['servername'];
	$bdd_info['username'] = $_POST['username'];
	$bdd_info['password'] = $_POST['password'];
	$bdd_info['dbname'] = $_POST['dbname'];

	echo "</br>";
	echo "</br>";
	/* echo "========le fd =>".$fd = fopen("./bdd_info", 'r+'); */
	echo "</br>";
	echo "</br>";
	$str = serialize($bdd_info);
	echo $str;
	echo "</br>";
	echo "</br>";
	file_put_contents("bdd_info", $str);


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

}

?>
