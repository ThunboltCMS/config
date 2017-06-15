<?php

declare(strict_types=1);

namespace Thunbolt\Config;

interface IConfig extends \ArrayAccess {

	/**
	 * @return iterable
	 */
	public function getValues(): iterable;

}
