<?php
session_start();
include 'm.php';
include 'goygoy.php';

	$database = new medoo([

		'database_type' => 'mysql',
		'database_name' => $d,
		'server' => '127.0.0.1',
		'username' => $u,
		'password' => $p,
		'charset' => 'utf8', 
	 
		'port' => 3306,
	 
	 
		'option' => [
			PDO::ATTR_CASE => PDO::CASE_NATURAL
		]
	]);

	$username = $_POST['username'];
	$password = md5($_POST['password']);


	$datas = $database->select("users", "*", [
		"AND" => [
			"username" => $username,
			"password" => $password
		]	
	]);

	$_SESSION['whoami'] = $datas[0]["username"];

	
	header("Location: login.php");

?>
