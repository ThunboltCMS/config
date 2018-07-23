<?php

declare(strict_types=1);

namespace Thunbolt\Config\DI;

use Nette\DI\CompilerExtension;
use Thunbolt\Config\Config;
use Thunbolt\Config\IConfig;

class ConfigExtension extends CompilerExtension {

	public function loadConfiguration(): void {
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('config'))
			->setType(IConfig::class)
			->setFactory(Config::class, [$this->getConfig()]);
	}

}
