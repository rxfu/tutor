<?php

namespace Tis\Tutor\Repositories;

use Tis\Core\Repository;
use Tis\Tutor\Entities\Party;

class PartyRepository extends Repository {

	public function __construct(Party $party) {
		$this->object = $party;
	}
}