<?php
session_start();
require ('mysql_functions.php');
$bdd_info = get_bdd_info();
$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);
/***** RECUPERER LES PRODUCTS *****/

$sql_p= "SELECT * FROM products";

if ($_GET['categorie'] != null)
{
	/* $sql_p= "SELECT * FROM products WHERE categorie = ".$_GET['categorie']; */
	$sql_p = "SELECT * FROM `products` WHERE `categorie` LIKE '".$_GET['categorie']."'";
}

$sql_c= "SELECT * FROM categories";

$result_p = mysqli_query($conn, $sql_p);
if (mysqli_num_rows($result_p) > 0) {
    while($row = mysqli_fetch_assoc($result_p))
		{
      	$product_id[] = $row["id"];
	 	$product_name[] = $row["name"];
        $product_categorie[] = $row["categorie"];
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
/***** RECUPERER LES PRODUCTS *****/

/***** RECUPERER LES CATEGORIES *****/
$result_c = mysqli_query($conn, $sql_c);
if (mysqli_num_rows($result_c) > 0) {
    while($row = mysqli_fetch_assoc($result_c))
    {
    		$categorie[] = $row["nom"];
    }
/*    print_r($categorie);*/

} else {
    echo "0 results";
}
/***** RECUPERER LES CATEGORIES *****/
?>

<div id="categories" />
	<ul class="categories">
<?php
	foreach ($categorie as $row)
	{
		/* echo "====>".$row."<=========="; */
		echo '<li><a href="index.php?categorie='.$row.'" data-filter="' . $row . '" tabindex="-1">' . $row . '</a></li>';
	}
?>

	</ul>
</div>

<div class="products">
<?php
  $i = 0;
	foreach ($product_name as $row)
	{
		echo '<div class="product"> <div class="txt_product"> <h2>' . $row .  '</br>' . $product_price[$i] . '$ </h2> </div> <div class="img_product"> <img alt="" src="' . $product_photo[$i] . '" /> </div>
        <a href="panier.php?action=add&id=' . $product_id[$i]. '&name='. $product_name[$i] .'&price='. $product_price[$i] .'&qqte=1"><div class="btton_buy">  <img alt="" src="../img/img_buy.png" /> </div> </a> </div>';
    $i++;
	}
?>
