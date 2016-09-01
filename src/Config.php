<?php

namespace Thunbolt\Config;

class Config {

	/** @var array */
	private $values;

	public function __construct(array $params) {
		$this->values = $params;
	}

	/**
	 * @return array
	 */
	public function getValues() {
		return $this->values;
	}

}
