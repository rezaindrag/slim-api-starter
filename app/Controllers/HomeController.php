<?php

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller {

	public function index($req, $res) {
		$stmt = $this->db->query("SELECT * FROM customers");
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		$res->withJson($result);
	}

}
