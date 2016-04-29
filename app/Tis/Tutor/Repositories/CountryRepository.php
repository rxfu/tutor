<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Country;
use Tis\Core\Repository;

class CountryRepository extends Repository {

	public function __construct(Country $country) {
		$this->object = $country;
	}
}