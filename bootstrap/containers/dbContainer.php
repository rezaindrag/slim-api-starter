<?php

$container['db'] = function ($container) {
	try {
		$db_settings = $container['settings']['db'];
		$dsn = 'mysql:host='.$db_settings['host'].';dbname='.$db_settings['database'];
		$dbh = new PDO($dsn, $db_settings['username'], $db_settings['password']);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		return $dbh;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
    	die();
	}
};