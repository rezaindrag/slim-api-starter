<?php

$container['HomeController'] = function ($container) {
	return new \App\Controllers\HomeController($container);
};

$container['tes'] = function ($container) {
	return 'tes container';
};