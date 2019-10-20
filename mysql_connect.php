<?php
$servername = "localhost";
$username = "root";
$password = "rootpasswd";
$dbname = "rush_00";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo "hello";
$sql = "SELECT id FROM produits";
$sql = "SHOW DATABASES";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
	// output data of each row
	while($row = mysqli_fetch_assoc($result)) {
		echo "id: " . $row["id"].  "<br>";
		var_dump($row);
	}
} else {
	echo "</br>0 results</br>";
}


mysqli_close($conn);

/* var_dump($result); */

?>
