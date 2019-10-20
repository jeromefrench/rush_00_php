<html>
	<head meta charset="utf-8" />
	<title>SERIAL EATER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
<h1>Page Visualiser Client</h1>



<?php

require_once ('mysql_functions.php');


$bdd_info = get_bdd_info();
$conn = connection_bdd($bdd_info['servername'], $bdd_info['username'], $bdd_info['password'], $bdd_info['dbname']);

$sql = "SELECT * FROM user";


$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
		{
			/* var_dump($row); */
      	$user_id[] = $row["id"];
		$user_login[] = $row["login"];
        $user_lname[] = $row["lname"];
        $user_fname[] = $row["fname"];
        $user_mail[] = $row["mail"];
        $user_passwd[] = $row["passwd"];

    }
/*		print_r($product_name);
    print_r($product_price);*/
  } else {
      echo "0 results";
  }

echo "
	<table id='tableau_client'>
  <tr>
    <th>id</th>
    <th>login</th>
    <th>F name</th>
    <th>L name</th>
    <th>mail</th>
    <th>passwd</th>
  </tr>
";

  $i = 0;
	foreach ($user_id as $id)
	{
		echo "
  <tr>
    <td>".$id."</td>
    <td>".$user_login[$i]."</td>
    <td>".$user_lname[$i]."</td>
    <td>".$user_fname[$i]."</td>
    <td>".$user_mail[$i]."</td>
    <td>".$user_passwd[$i]."</td>
  	</tr>
";
    $i++;
	}
	echo "</table>";
?>
	</body>
</html>
