<?php
	echo "hello my server";	
	echo "<br>";
	$var_ = " my first variable";

	echo  $var_;



	$db_host = "85.217.170.209";
	$db_user = "root";
	$db_password = "b3nl1t3ch18";
	$db_name = "snirh";

	$connection = mysqli_connect($db_host,$db_user,$db_password,$db_name);

	var_dump($connection);	

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<label>name</label><input type="text" placeholder="insert you name">
		<input type="button" value="submit">
	</body>
</html>