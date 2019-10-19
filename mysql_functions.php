<?php

function get_bdd_info()
{
	$bdd_info['servername'] = "localhost";
	$bdd_info['username'] = "root";
	$bdd_info['password'] = "MOT2passe";
	$bdd_info['dbname'] = "rush_00";
	return $bdd_info;
}

function connection_bdd($servername, $username, $password, $dbname)
{
	echo "TRY TO CREATE CONNECTION... </br>";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("CONNECTION FAILLED: " . mysqli_connect_error());
	}

	echo "CONNECTION SUCCESSFUL!</br>";
	return ($conn);
}

function create_categorie($categorie_name, $conn)
{
	$sql = "INSERT INTO `categories` (`id`, `nom`) VALUES (NULL, '$categorie_name')";

	if (mysqli_query($conn, $sql)) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

?>
