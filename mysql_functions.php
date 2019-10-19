<?php

function get_bdd_info()
{
	$bdd_info['servername'] = "localhost";
	$bdd_info['username'] = "root";
	$bdd_info['password'] = "rootpasswd";
	$bdd_info['dbname'] = "rush_00";
	return $bdd_info;
}

function connection_bdd($servername, $username, $password, $dbname)
{
	echo "try to Create connection</br>";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	echo "Connexion reussi !</br>";
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








/* exit(); */


/* $servername = "localhost"; */
/* $username = "root"; */
/* $password = "rootpasswd"; */
/* $dbname = "rush_00"; */

/* // Create connection */
/* $conn = mysqli_connect($servername, $username, $password, $dbname); */

/* // Check connection */
/* if (!$conn) { */
/* 	die("Connection failed: " . mysqli_connect_error()); */
/* } */
/* echo "Connected successfully"; */

/* echo "hello"; */
/* $sql = "SELECT id FROM produits"; */
/* $sql = "SHOW DATABASES"; */
/* $result = mysqli_query($conn, $sql); */


/* if (mysqli_num_rows($result) > 0) { */
/* 	// output data of each row */
/* 	while($row = mysqli_fetch_assoc($result)) { */
/* 		echo "id: " . $row["id"].  "<br>"; */
/* 		var_dump($row); */
/* 	} */
/* } else { */
/* 	echo "</br>0 results</br>"; */
/* } */


/* mysqli_close($conn); */

/* /1* var_dump($result); *1/ */

?>
