<?php 
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	require "goygoy.php";
	$link = mysqli_connect("127.0.0.1", $u, $p, $d);
	mysqli_set_charset($link, 'utf8'); 
	mysqli_query($link, "SET NAMES 'utf8';");
	mysqli_query($link, "SET CHARACTER SET 'utf8';");
	mysqli_query($link, "SET COLLATION_CONNECTION = 'utf8_unicode_ci';");


	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL; 
	    exit; 
	}	
?>
