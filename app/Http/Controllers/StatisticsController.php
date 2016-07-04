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
		$title = '按性别统计';

		return view('statistics.by_age', compact('title', 'items'));
	}

	public function getStatisticsByDegree() {
		$items = $this->statistics->countByDegree();
		foreach ($items as &$item) {
			switch ($item->zgxw) {
			case 0:
				$item->mc = '无';
				break;

			case 1:
				$item->mc = '学士';
				break;

			case 2:
				$item->mc = '硕士';
				break;

			case 3:
				$item->mc = '博士';
				break;

			default:
				$item->mc = '无';
				break;
			}
		}
		$title = '按学位统计';

		return view('statistics.by_age', compact('title', 'items'));
	}

	public function getStatisticsByPosition() {
		$items = $this->statistics->countByPosition();
		$title = '按职称统计';

		return view('statistics.by_age', compact('title', 'items'));
	}

	public function getStatisticsByDiscipline() {
		$items = $this->statistics->countByDiscipline();
		$title = '按学科统计';

		return view('statistics.by_age', compact('title', 'items'));
	}

	public function getStatisticsByCollege() {
		$items = $this->statistics->countByCollege();
		$title = '按学院统计';

		return view('statistics.by_college', compact('title', 'items'));
	}

	public function getStatisticsBySubdiscipline() {
		$items = $this->statistics->countBySubdiscipline();
		$title = '按二级学科统计';

		return view('statistics.by_subdiscipline', compact('title', 'items'));
	}
}
