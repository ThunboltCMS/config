<?php

declare(strict_types=1);

namespace Thunbolt\Config\DI;

use Nette\DI\CompilerExtension;
use Thunbolt\Config\Config;

class ConfigExtension extends CompilerExtension {

	public function loadConfiguration(): void {
		$builder = $this->getContainerBuilder();

		$builder->addDefinition($this->prefix('config'))
			->setClass(Config::class, [$this->getConfig()]);
	}

}
