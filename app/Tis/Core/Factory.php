<?php

namespace Tis\Core;

abstract class Factory {

	protected $namespace = 'Tis\\';

	public function build($classname) {
		$class = $this->namespace . $classname;

		if (class_exists($class)) {
			return new $class;
		} else {
			throw new Exception('Invalid Class Name');
		}
	}
}