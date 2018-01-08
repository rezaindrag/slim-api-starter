<?php

$container['db'] = function ($container) {
	try {
		// DB settings
		$db_settings = $container['settings']['db'];
		$database = new \App\Database($db_settings);
		return $database->connect();
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/>";
    	die();
	}
};