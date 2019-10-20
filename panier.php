<?php
session_start();


require ('mysql_functions.php');

$bdd_info = get_bdd_info();
$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);


$sql_p= "SELECT * FROM products";

$result_p = mysqli_query($conn, $sql_p);
if (mysqli_num_rows($result_p) > 0) {
    while($row = mysqli_fetch_assoc($result_p))
		{
      	$product_id[] = $row["id"];
				$product_name[] = $row["name"];
        $product_price[] = $row["price"];
        $product_statut[] = $row["statut"];
        $product_stock[] = $row["stock"];
        $product_description[] = $row["description"];
        $product_photo[] = $row["photo"];

    }
/*		print_r($product_name);
    print_r($product_price);*/
  } else {
      echo "0 results";
  }

?>


<html>
	<head meta charset="utf-8" />
	<title>SERIAL EATER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<nav>
			<ul>
				<li class="nav_hover"><a href="index.php" >HOME</a></li>
				<li class="nav_hover"><a href="inscription.php" >JOIN US !</a></li>
				<li class="on"><a href="panier.php" >PANIER</a></li>
				<li class="nav_hover"><a href="login.php" >LOG IN</a></li>
				<li class="admin"><a href="administration.php">ADMIN</a></li>
			</ul>
		</nav>

</body>


<h1>TEXT</h1>

<?php
foreach($_GET as $key => $value)
{
  echo "$key: $value"."\n";
}


if ($_GET[action] == "add"))
{
  echo "AJOUTE LE PRODUIT AU PANIER";
}

 ?>


</div>
</html>
