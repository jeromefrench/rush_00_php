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

<?php
display_user();
?>
</body>


<?php



if (! isset($_SESSION['panier']))
{
  $_SESSION['panier'] = array();

}
//  $_SESSION['panier'][$article]['nom']  = $_GET['name'];
//  $_SESSION['panier'][$article]['prix'] = $_GET['price'];
//  $_SESSION['panier'][$article]['qqte'] = $_GET['qqte'];
//  $articles = array("nom" => $_GET['name'], "prix" => $_GET['price'], "qqte" => $_GET['qqte']);
//  $_SESSION['panier']= $articles;

if ($_GET['action'] == "add")
{

  $articles = array("id" => $_GET['id'], "nom" => $_GET['name'], "price" => $_GET['price'], "qqte" => $_GET['qqte']);
  array_push($_SESSION['panier'], $articles);

}
if ($_GET['supprimer'] == "supprimer")
{
   echo "SURPRIME LE";
   echo "<br/>";
   unset($_SESSION['panier'][$article]['id']);
}
/*if (($_GET['modifier'] == "ajouter"))
   $_SESSION['panier'][$id_article]['qte'] = $article['qqte'];*/

echo '<form>';
foreach($_SESSION['panier'] as $article)
{
  echo  $article['nom'] . '(' . number_format($article['price'], 2, ',', ' ') . ' €) ' .
        '<input type="hidden" name="id_article" value="' . $article['id'] . '" />
        <br />Qté: <input type="text" name="qte_article" value="' . $article['qqte'] . '" />
        <input type="submit" name="modifier" value="ajouter" />
        <input type="submit" name="supprimer" value="supprimer" /><hr>';
        $total_panier += $article['price'] * $article['qqte'];
}
echo '<form/>';
if(isset($article['nom']))
{
  echo '<h1>Total: ', number_format($total_panier, 2, ',', ' '), ' €<h1/>'; // Affiche le total du panier
  echo '<input type="submit" name="valider" value="valider" />';
}









?>


</div>
</html>
