<?php

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller {

	public function index($req, $res) {
		$res->getBody()->write('Welcome to Slim API Starter!');
	}

}
