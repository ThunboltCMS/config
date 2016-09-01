<?php

namespace Thunbolt\Config\DI;

use Nette\DI\CompilerExtension;
use Thunbolt\Config\Config;

class ConfigExtension extends CompilerExtension {

	public function loadConfiguration() {
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('config'))
			->setClass(Config::class, [$this->getConfig()]);
	}

}
