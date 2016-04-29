<?php

namespace Tis\Tutor\Repositories;

use App\Tis\Tutor\Entities\Party;
use Tis\Core\Repository;

class PartyRepository extends Repository {

	public function __construct(Party $party) {
		$this->object = $party;
	}
}