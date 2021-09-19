<?php 
	define('HOST','localhost');
	define('DB_NAME','champ_recherche');
	define('USER','root');
	define('PASS','');
     try {
     	$db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
     	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     	$db->exec("SET NAMES 'UTF8'");
     	//echo "connect:ok";
     	
     } catch (PDOException $e) {
     	echo $e;     	
     }
 ?>