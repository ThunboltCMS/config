<?php

declare(strict_types=1);

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
	public function getValues(): array {
		return $this->values;
	}

}
