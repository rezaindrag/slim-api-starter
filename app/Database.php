<?php

namespace App;

use PDO;
use Exception;

class Database {

	private $db_settings;

	public function __construct($db_settings) {
		$this->db_settings = $db_settings;
	}

	public function connect() {
		switch ($this->db_settings['driver']) {
			case 'mysql':
				return $this->mySqlConnect();
				break;
			case 'mssql':
				return $this->msSqlConnect();
				break;
			default:
                throw new Exception('Database driver is not available.');
		}
	}

	private function mySqlConnect() {
		$dsn = 'mysql:host='.$this->db_settings['host'].';dbname='.$this->db_settings['database'];
		$dbh = new PDO($dsn, $this->db_settings['username'], $this->db_settings['password']);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		return $dbh;
	}

	private function msSqlConnect() {
		$dsn = 'sqlsrv:Server='.$this->db_settings['host'].','.$this->db_settings['port'].';';
		$dsn .= 'Database='.$this->db_settings['database'].';ConnectionPooling=true';
		$dbh = new PDO($dsn, $this->db_settings['username'], $this->db_settings['password']);
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		return $dbh;
	}

}
