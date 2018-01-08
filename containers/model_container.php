<?php

$container['User'] = function ($container) {
	return new \App\Models\User($container);
};