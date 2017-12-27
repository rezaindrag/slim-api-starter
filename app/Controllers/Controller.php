<?php

namespace App\Controllers;

class Controller {

	protected $container;

	public function __construct($container) {
		$this->container = $container;
	}

	/**
	 * Magic Method __get()
	 * 
	 * Method yang digunakan untuk mendapatkan property apa yang sedang dipakai,
	 * dg method __get(), kita dapat memanipulasi nama method yang digunakan
	 *
	 * @param string $property
	 * @return method $this->container->{$property} mendapatkan method yang tersedia 
	 */
	public function __get($property) {
		if ($this->container->{$property}) {
			return $this->container->{$property};
		}
	}

}
