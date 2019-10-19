<?php
$servername = "localhost";
$username = "root";
$password = "rootpasswd";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

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
	}
} else {
	echo "0 results";
}










var_dump($result);

?>
