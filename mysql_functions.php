<?php

function get_bdd_info()
{
	/* $bdd_info['servername'] = "localhost"; */
	/* $bdd_info['username'] = "root"; */
	/* $bdd_info['password'] = "rootpasswd"; */
	/* $bdd_info['dbname'] = "rush_00"; */
	$str = file_get_contents("./bdd_info");
	/* echo "==>".$str."<=="; */
	$bdd_info = unserialize($str);
	/* var_dump($bdd_info); */
	return $bdd_info;
}


function drop_database()
{
	$bdd_info = get_bdd_info();
	$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);

	echo "On delate la database (tout)";

	$sql = "DROP DATABASE ".$bdd_info['dbname']."";
	if (mysqli_query($conn, $sql)) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

}


function connection_bdd($servername, $username, $password, $dbname)
{

	$bdd_info = get_bdd_info();


	$servername = $bdd_info['servername'];
	$username = $bdd_info['username'];
	$password = $bdd_info['password'];
	$dbname = $bdd_info['dbname'];


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
