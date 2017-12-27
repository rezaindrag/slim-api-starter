<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/settings.php';

$app = new \Slim\App($settings);

$container = $app->getContainer();

require_once __DIR__ . '/containers/dbContainer.php';
require_once __DIR__ . '/containers/controllerContainer.php';

require_once __DIR__ . '/../app/routes.php';