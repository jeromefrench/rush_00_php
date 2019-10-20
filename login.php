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
				<li class="nav_hover"><a href="inscription.php" >JOIN US !</a></li>
				<li class="nav_hover"><a href="panier.php" >PANIER</a></li>
				<li class="on"><a href="login.php" >LOG IN</a></li>
				<li class="admin"><a href="administration.php">ADMIN</a></li>
			</ul>
		</nav>

<?php
	if (!isset($_POST['submit']))
	{
		echo '

  <form action="login.php" method="post">
		  <div class="container_login">
				<label for="login"><b>LOGIN</b></label>
			    <input type="text" placeholder="Enter LOGIN" name="login" required>
				<br />
			    <label for="psw"><b>PASSWORD</b></label>
			    <input type="password" placeholder="Enter Password" name="passwd" required>
				<br />
			    <input type="submit" name="submit" class="loginbtn" value="LOG IN">
		  </div>
		</form>
';
	}
	else
	{
		//on triate le sign in
		if (login_and_password_match($_POST['login'], $_POST['passwd']) == true)
		{
			echo "YOU ARE NOW LOG IN   YEAHHHHH";
			$_SESSION['logon'] = true;
			$_SESSION['login'] = $_POST['login'];
		}
		else
		{
			echo "LOGIN AND PASSWORD DOESNT MATCH SORRY";
		}

	}
?>

<?php
display_user();
?>

	</body>
</html>
