<?php

namespace App\Http\Controllers;

use Tis\Tutor\Services\StatisticsService;

class StatisticsController extends Controller {

	protected $statistics;

	public function __construct(StatisticsService $statistics) {
		$this->statistics = $statistics;
	}

	public function getStatisticsByAge() {
		$items = $this->statistics->countByAge();
		$title = '按年龄统计';

		return view('statistics.age', compact('title', 'items'));
	}

	public function getStatisticsByPosition() {
		$items = $this->statistics->countByPosition();
		$title = '按职称统计';

		return view('statistics.position', compact('title', 'items'));
	}
}
