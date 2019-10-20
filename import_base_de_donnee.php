<h1>Import de la base de donnee</h1>
<a href="administration.php">Retour</a>

<form method="post" action="import_base_de_donnee.php">

<input type="text" name="file" <?php echo" value=".getcwd()."/rush_00.sql" ?>>
	<input type="submit" name="submit">
</form>

<?php
if ($_POST['submit'] != null)
{
	include_once ('mysql_functions.php');
	$bdd_info = get_bdd_info();
	$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);
	$sql = file_get_contents($_POST['file']);
	$tab_sql = explode(";", $sql);
	foreach($tab_sql as $statement)
	{
		echo "</br></br>".$statement."</br>";
		if (mysqli_query($conn, $statement)) {
    		echo "New record created successfully";
		} else {
    		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}

?>
