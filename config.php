<?php
	define('HOST','');
	define('DBNAME','');
	define('DBUSER','');
	define('DBPASS','');
	$addresswallet = "BTC Address";
	$website = "website name";
	$filename = "path to db.txt";		
	$pdo = new PDO('mysql:host='.HOST.';dbname='.DBNAME.'', ''.DBUSER.'', ''.DBPASS.'');
?>              