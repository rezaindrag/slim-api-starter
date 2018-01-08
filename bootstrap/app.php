<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/settings.php';

$app = new \Slim\App($settings);

$container = $app->getContainer();

require_once __DIR__ . '/../containers/db_container.php';
require_once __DIR__ . '/../containers/controller_container.php';
require_once __DIR__ . '/../containers/model_container.php';

require_once __DIR__ . '/../routes/get_routes.php';
require_once __DIR__ . '/../routes/post_routes.php';
require_once __DIR__ . '/../routes/delete_routes.php';
require_once __DIR__ . '/../routes/put_routes.php';