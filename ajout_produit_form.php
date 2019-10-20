<?php

require ('mysql_functions.php');

$bdd_info = get_bdd_info();
$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);

/***** RECUPERER LES CATEGORIES POUR CATERGORIES DU PRODUIT *****/
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($product_categorie= mysqli_fetch_assoc($result))
		{
				$categorie[] = $product_categorie["nom"];
        /*echo "id: " . $row["id"]. " - Name: " . $row["nom"] . ".\n";*/
    }
/*		print_r($categorie);*/
} else {
    echo "0 results";
}
/***** RECUPERER LES CATEGORIES POUR CATERGORIES DU PRODUIT  *****/

?>



<h1>Page ajout produit</h1>
<a href="administration.php">Retour</a>


<form method="post" action="ajout_produit.php">
	<p>
    Nom du produit :</br>
    <input type="text" name="product_name"></br>

    Categorie :</br>
    <input list="product_categorie"  name="product_categorie" >
    <datalist id="product_categorie">
      <?php
          foreach ($categorie as $product_categorie)
          {
              echo '<option value=' . $product_categorie . '>';
          }
      ?>
    </datalist>
    </br>
    Prix :</br>
    <input type="number" name="product_price"></br>

    Statut :</br>
    <input list="product_statut">
     <datalist id="product_statut">
         <option value="ordered">
         <option value="not ordered">
     </datalist></br>

      Stock :</br>
      <input type="number" name="product_stock"></br>

      Description :</br>
      <textarea name="product_description" rows="10" cols="30">
      </textarea></br>

      Photo (link): </br>
      <input type="text" name="product_photo"></br>



		 </br><input type="submit">
		</br>


	</p>
</form>
