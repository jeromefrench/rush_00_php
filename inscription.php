<?php
session_start();
require ('mysql_functions.php');
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

	if ($user_login != "" && $user_fname != "" && $user_lname != "" && $user_mail != "" && $user_passwd != "")
	{
		$bdd_info = get_bdd_info();
		$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);

		if (check_if_login_exist($user_login) == false)
		{
			add_user_to_bdd($user_login, $user_fname, $user_lname, $user_mail, $user_passwd, $conn);
			echo "<p>L'utilisateur a bien ete ajouter, Veuillez vous connectez.</p>";
			echo '<p><a href="login.php">Login</a></p>';
		}
		else
		{
			echo "Desolez ce login est deja pris";
		}
	}
}
?>

<?php
display_user();
?>
	</body>
</html>
