<?php

namespace Tis\Tutor\Services;

use Illuminate\Support\Facades\DB;

class StatisticsService {

	public function countByAge() {
		$query   = "SELECT xb, SUM(IF(age < 30, 1, 0)) AS 'under_30', SUM(IF(age BETWEEN 30 AND 34, 1, 0)) AS '30-34', SUM(IF(age BETWEEN 35 AND 39, 1, 0)) AS '35-39', SUM(IF(age BETWEEN 40 AND 44, 1, 0)) AS '40-44', SUM(IF(age BETWEEN 45 AND 49, 1, 0)) AS '45-49', SUM(IF(age BETWEEN 50 AND 54, 1, 0)) AS '50-54', SUM(IF(age BETWEEN 55 AND 59, 1, 0)) AS '55-59', SUM(IF(age BETWEEN 60 AND 64, 1, 0)) AS '60-64', SUM(IF(age >= 65, 1, 0)) AS 'over_65', COUNT(*) AS total FROM (SELECT xb, TIMESTAMPDIFF(YEAR, csny, CURDATE()) AS age FROM y_ds_dsxx) AS derived GROUP BY xb ORDER BY xb";
		$results = DB::select($query)->toArray();

		$counts = [];
		foreach ($results as $result) {
			$counts[0][$result['xb']] = $result['under_30'];
			$counts[1][$result['xb']] = $result['30-34'];
			$counts[2][$result['xb']] = $result['35-39'];
			$counts[3][$result['xb']] = $result['40-44'];
			$counts[4][$result['xb']] = $result['45-49'];
			$counts[5][$result['xb']] = $result['50-54'];
			$counts[6][$result['xb']] = $result['55-59'];
			$counts[7][$result['xb']] = $result['60-64'];
			$counts[8][$result['xb']] = $result['over_65'];
		}

		return $counts;
	}

	public function statByCollege() {

	}

	public function statByDegree() {

	}

	public function statByPosition() {

	}

	public function statByDiscipline() {

	}

	public function statBySubdiscipline() {

	}
}