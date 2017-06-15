<?php

declare(strict_types=1);

namespace Thunbolt\Config;

class Config implements IConfig {

	/** @var array */
	private $values;

	public function __construct(array $params) {
		$this->values = $params;
	}

	/**
	 * @return iterable
	 */
	public function getValues(): iterable {
		return $this->values;
	}

	// array access

	public function offsetExists($offset): bool {
		return isset($this->values[$offset]);
	}

	public function offsetGet($offset) {
		return $this->values[$offset];
	}

	public function offsetSet($offset, $value) {
		throw new ConfigException('offsetSet is forbidden.');
	}

	public function offsetUnset($offset) {
		throw new ConfigException('offsetUnset is forbidden.');
	}

}
