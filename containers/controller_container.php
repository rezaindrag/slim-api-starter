<?php

$container['HomeController'] = function ($container) {
	return new \App\Controllers\HomeController($container);
};