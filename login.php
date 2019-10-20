<?php

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


  <form action="inscription.php" method="post">
		  <div class="container_login">
				<label for="email"><b>MAIL</b></label>
			    <input type="text" placeholder="Enter Email" name="email" required>
				<br />
			    <label for="psw"><b>PASSWORD</b></label>
			    <input type="password" placeholder="Enter Password" name="psw" required>
				<br />
			    <button type="submit" class="loginbtn">LOG IN</button>
		  </div>
		</form>


	</body>
</html>
