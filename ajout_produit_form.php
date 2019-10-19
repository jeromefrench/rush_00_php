<h1>Page ajout produit</h1>
<a href="administration.php">Retour</a>


<form method="post" action="ajout_produit.php">
	<p>
		Nom du produit :</br>
		<input type="text" name="nom_produit"></br>

		Categorie :</br>
		<input list="categorie">
		<datalist id="categorie">
			<option value="categorie 1">
			<option value="categorie 2">
			<option value="categorie 3">
			<option value="categorie 4">
			<option value="categorie 5">
		</datalist>

		</br>
		Prix :</br>
		<input type="number" name="prix_produit"></br>

		Description :</br>
		<textarea name="message" rows="10" cols="30">
		</textarea></br>


		Photo (link): </br>
		<input type="text" name="produit_photo_link"></br>

		<input type="submit">
	</p>
</form>
