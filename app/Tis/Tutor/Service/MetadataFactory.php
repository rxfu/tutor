<?php

namespace Tis\Tutor\Service;

use Tis\Core\Factory;

class MetadataFactory extends Factory {

	protected $namespace = 'Tis\\Tutor\\Repositories\\';

	public function build($type) {
		$class = ucfirst($type) . 'Repository';

		return parent::build($class);
	}
}