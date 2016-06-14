<?php

namespace App\Http\Controllers;

use Tis\Tutor\Repositories\DisciplineRepository;
use Tis\Tutor\Repositories\GenderRepository;
use Tis\Tutor\Repositories\PositionRepository;
use Tis\Tutor\Services\StatisticsService;

class StatisticsController extends Controller {

	protected $statistics;

	protected $genders;

	protected $positions;

	protected $disciplines;

	public function __construct(StatisticsService $statistics,
		GenderRepository $genders,
		PositionRepository $positions,
		DisciplineRepository $disciplines) {
		$this->statistics  = $statistics;
		$this->genders     = $genders;
		$this->positions   = $positions;
		$this->disciplines = $disciplines;
	}

	public function getStatisticsByGender() {
		$items = $this->statistics->countByGender();
		$types = $this->genders->getAll();
		$title = '按性别统计';

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

	public function getStatisticsByDiscipline() {
		$items = $this->statistics->countByDiscipline();
		$types = $this->disciplines->getAll();
		$title = '按学科统计';

		return view('statistics.by_age', compact('title', 'items', 'types'));
	}

	public function getStatisticsByCollege() {
		$items = $this->statistics->countByCollege();
		$title = '按学院统计';

		return view('statistics.by_college', compact('title', 'items'));
	}
}
