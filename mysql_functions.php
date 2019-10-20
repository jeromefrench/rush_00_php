<?php

function display_user()
{
	if (isset($_SESSION['logon']))
	{
		if ($_SESSION['logon'] == true)
		{
			echo'
			<div class="user_connect">
			<p>Vous etes connecter en tant que :</br>
			'.$_SESSION['login'].'</p>
			</div>
			';
		}
	}
}

function get_bdd_info()
{
	$str = file_get_contents("./bdd_info");
	$bdd_info = unserialize($str);
	return $bdd_info;
}

function drop_database()
{
	$bdd_info = get_bdd_info();
	$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);
	$sql = "DROP DATABASE ".$bdd_info['dbname']."";
	if (mysqli_query($conn, $sql)) {
	{
    	//	echo "New record created successfully";
		;
	}
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

function connection_bdd($servername, $username, $password, $dbname)
{
	$bdd_info = get_bdd_info();
	$servername = $bdd_info['servername'];
	$username = $bdd_info['username'];
	$password = $bdd_info['password'];
	$dbname = $bdd_info['dbname'];
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("CONNECTION FAILLED: " . mysqli_connect_error());
	}
	return ($conn);
}

function create_categorie($categorie_name, $conn)
{
	$sql = "INSERT INTO `categories` (`id`, `nom`) VALUES (NULL, '$categorie_name')";
	if (mysqli_query($conn, $sql)) {
	{
		;
    	/* echo "New record created successfully"; */
	}
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

function create_product($product_name, $product_categorie, $product_price, $product_statut, $product_stock, $product_description, $product_photo, $conn)
{
	echo "boom";
	$sql = "INSERT INTO products (`id`, `name`, `categorie`, `price`, `statut`, `stock`, `description`, `photo`) VALUES (NULL, '$product_name', '$product_categorie', '$product_price', '$product_statut', '$product_stock', '$product_description', '$product_photo')";
	if (mysqli_query($conn, $sql)) {
    	echo "New record created successfully";
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

function add_user_to_bdd($user_login, $user_fname, $user_lname, $user_mail, $user_passwd, $conn)
{
	$sql = "INSERT INTO user (`id`, `login`, `fname`, `lname`, `mail`, `passwd`) VALUES (NULL, '$user_login', '$user_fname', '$user_lname', '$user_mail', '$user_passwd')";
	if (mysqli_query($conn, $sql)) {
	{
		;
	}
	} else {
    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

function check_if_login_exist($new_login)
{
	$bdd_info = get_bdd_info();
	$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);
	$sql = "SELECT * FROM `user` WHERE `login` LIKE '".$new_login."'";
	$result_p = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result_p) > 0) {
    	while($row = mysqli_fetch_assoc($result_p))
		{
			return true;
    	}
  	} else {
		return false;
  	}
	return false;
}

function login_and_password_match($login, $password)
{
	$bdd_info = get_bdd_info();
	$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);
	$sql = "SELECT * FROM `user` WHERE `login` LIKE '".$login."'";
	$result_p = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result_p) > 0) {
    	while($row = mysqli_fetch_assoc($result_p))
		{
			if (($val = strcmp($password, $row['passwd'])) == 0)
			{
				return true;
			}
    	}
  	} else {
		return false;
  	}
}

?>
