<?php
//define of database credentials
	define('DB_HOST', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'crud');

	$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if($connection ===false){
		die("Error. Could Not Connect".mysqli_connect_error());
	}

?>
