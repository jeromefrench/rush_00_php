<?php

require ('mysql_functions.php');

$bdd_info = get_bdd_info();
var_dump($bdd_info);
$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);



/****AJOUT USER - EN COURS*****/
/*
echo "on va ajouter les users ==>".$_POST['categorie_name']."</br>";
create_user($_POST['categorie_name'], $conn);



function create_users($categorie_name, $conn)
{
	$sql = "INSERT INTO `categories` (`id`, `nom`) VALUES (NULL, '$categorie_name')";

	if (mysqli_query($conn, $sql)) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}



INSERT INTO `users` (`id`, `identifiant`, `first name`, `lastname`, `email`, `password`) VALUES (NULL, '$user_login', '$user_fname', '$user_lname', '$user_mail', '$user_passwd');


*/
/****AJOUT USER - EN COURS*****/

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
				<li class="on"><a href="inscription.php" >JOIN US !</a></li>
				<li class="nav_hover"><a href="panier.php" >PANIER</a></li>
				<li class="nav_hover"><a href="login.php" >LOG IN</a></li>
				<li class="admin"><a href="administration.php">ADMIN</a></li>
			</ul>
		</nav>


<?php

if (!isset($_POST['submit']))
{
	echo '
		<form action="inscription.php" method="post">
		  <div class="container_signup">
				<label for="user_login"><b>USER LOGIN</b></label>
				<input type="text" placeholder="entrez un identifiant" name="user_login" required>
				<br />

				<label for="user_fname"><b>FIRST NAME</b></label>
				<input type="text" placeholder="entrez votre prenom" name="user_fname" required>
				<br />

				<label for="user_lname"><b>LAST NAME</b></label>
		    <input type="text" placeholder="entrez votre nom" name="user_lname" required>
				<br />

				<label for="user_mail"><b>MAIL</b></label>
		    <input type="text" placeholder="entrez votre adresse mail" name="user_mail" required>
				<br />

		    <label for="user_passwd"><b>PASSWORD</b></label>
		    <input type="password" placeholder="entrez un mot de passe" name="user_passwd" required>
				<br />

		    <input type="submit" name="submit" class="signupbtn" value="JOIN US">
		  </div>
		</form>
';
}
else
{
	$user_login = $_POST['user_login'];
	$user_fname = $_POST['user_fname'];
	$user_lname = $_POST['user_lname'];
	$user_mail = $_POST['user_mail'];
	$user_passwd = $_POST['user_passwd'];

	echo "ON CHEEEECK";


	if ($user_login != "" && $user_fname != "" && $user_lname != "" && $user_mail != "" && $user_passwd != "")
	{
		//check si login exist
	echo "</br>ON CHEEEECK try to add</br>";
		$bdd_info = get_bdd_info();
		$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);

		if (check_if_login_exist($user_login) == false)
		{
			//on ajoute le le user
			add_user_to_bdd($user_login, $user_fname, $user_lname, $user_mail, $user_passwd, $conn);
			echo "USER ADD SUCESSFULL";

		}
		else
		{

			echo "USER exist allready";
		}
	}



}

?>


	</body>
</html>
