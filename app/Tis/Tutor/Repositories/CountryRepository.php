<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\Country;

class CountryRepository extends Repository {

	public function __construct(Country $country) {
		$this->object = $country;
	}
}