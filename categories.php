<?php

require ('mysql_functions.php');

$bdd_info = get_bdd_info();
$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);

$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);



/*CODE A COMPRENDRE SI FONCITONNE*/
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
		{
				$categorie[] = $row["nom"];
        /*echo "id: " . $row["id"]. " - Name: " . $row["nom"] . ".\n";*/
    }
		print_r($categorie);
} else {
    echo "0 results";
}



/* INSERT INTO `categories` (`id`, `nom`) VALUES (NULL, 'kid\'s'); */

?>


<div id="categories" />

	<ul class="categories">
			 <li><a href="#" data-group="<?php $categorie[0] ?>"> <?php echo $categorie[0]; ?></a> </li>
			 <li><a href="#" data-group="Klassic">X</a> </li>
			 <li><a href="#" data-group="Bio">X</a> </li>
			 <li><a href="#" data-group="Kids">X</a> </li>
			 <li><a href="#" data-group="Barres">X</a> </li>
	</ul>

</div>

<div class="gallery">

<ul class="products">
	<li data-groups='["Klassic"]'>
		<a href="#" >
			<div class="">
				<img alt="" class="" src="https://images.squarespace-cdn.com/content/v1/5c590782fd67932345578da8/1555397697745-72CTNERMZGQVH3IRDXNW/ke17ZwdGBToddI8pDm48kBj6cSKTxOtsOD0_pLNALzNZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpwx9iYN7JS2RffJg2KS8Btv6O5MsxWvOsIWg8TvrrZk4xqfQhasIc600mZrnQN4idI/black-square.jpg" />
			</div>
	 	</a>
	</li>
	<li data-groups='["Bio"]'>
		<a href="#" >
			<div class="">
				<img alt="" class="" src="https://static.wixstatic.com/media/35f40b_173bb8d9b17b43be8c84954447d10e3e~mv2_d_1205_1205_s_2.png/v1/fill/w_1205,h_1205,al_c,q_90/file.jpg" />
			</div>
		</a>
	</li>
	<li data-groups='["Kid"]'>
		<a href="#" >
			<div class="">
				<img alt="" class="" src="https://images.squarespace-cdn.com/content/v1/5c590782fd67932345578da8/1555397697745-72CTNERMZGQVH3IRDXNW/ke17ZwdGBToddI8pDm48kBj6cSKTxOtsOD0_pLNALzNZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpwx9iYN7JS2RffJg2KS8Btv6O5MsxWvOsIWg8TvrrZk4xqfQhasIc600mZrnQN4idI/black-square.jpg" />
			</div>
		</a>
	</li>
</ul>
</div>
