<?php

namespace App\Http\Controllers;

use Tis\Tutor\Repositories\GenderRepository;
use Tis\Tutor\Repositories\PositionRepository;
use Tis\Tutor\Services\StatisticsService;

class StatisticsController extends Controller {

	protected $statistics;

	protected $genders;

	protected $positions;

	public function __construct(StatisticsService $statistics,
		GenderRepository $genders,
		PositionRepository $positions) {
		$this->statistics = $statistics;
		$this->genders    = $genders;
		$this->positions  = $positions;
	}

	public function getStatisticsByAge() {
		$items = $this->statistics->countByAge();
		$types = $this->genders->getAll();
		$title = '按年龄统计';

		return view('statistics.by_age', compact('title', 'items', 'types'));
	}

	public function getStatisticsByDegree() {
		$items = $this->statistics->countByDegree();
		$types = [
			(object) ['dm' => 0, 'mc' => '无'],
			(object) ['dm' => 1, 'mc' => '学士'],
			(object) ['dm' => 2, 'mc' => '硕士'],
			(object) ['dm' => 3, 'mc' => '博士'],
		];
		$title = '按学位统计';

		return view('statistics.by_age', compact('title', 'items', 'types'));
	}

	public function getStatisticsByPosition() {
		$items = $this->statistics->countByPosition();
		$types = $this->positions->getAll();
		$title = '按职称统计';

		return view('statistics.by_age', compact('title', 'items', 'types'));
	}
}
