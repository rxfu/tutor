<?php

namespace Tis\Tutor\Services;

use Illuminate\Support\Facades\DB;

class StatisticsService {

	public function countByAge() {
		$query   = "SELECT xb, SUM(IF(age < 30, 1, 0)) AS 'under_30', SUM(IF(age BETWEEN 30 AND 34, 1, 0)) AS 'to_34', SUM(IF(age BETWEEN 35 AND 39, 1, 0)) AS 'to_39', SUM(IF(age BETWEEN 40 AND 44, 1, 0)) AS 'to_44', SUM(IF(age BETWEEN 45 AND 49, 1, 0)) AS 'to_49', SUM(IF(age BETWEEN 50 AND 54, 1, 0)) AS 'to_54', SUM(IF(age BETWEEN 55 AND 59, 1, 0)) AS 'to_59', SUM(IF(age BETWEEN 60 AND 64, 1, 0)) AS 'to_64', SUM(IF(age >= 65, 1, 0)) AS 'over_65', COUNT(*) AS total FROM (SELECT xb, TIMESTAMPDIFF(YEAR, csny, CURDATE()) AS age FROM y_ds_dsxx) AS derived GROUP BY xb ORDER BY xb";
		$results = DB::select($query);

		$counts = [];
		foreach ($results as $result) {
			$counts[0]['title']     = '30岁以下';
			$counts[0][$result->xb] = $result->under_30;
			$counts[1]['title']     = '30~34岁';
			$counts[1][$result->xb] = $result->to_34;
			$counts[2]['title']     = '35~39岁';
			$counts[2][$result->xb] = $result->to_39;
			$counts[3]['title']     = '40~44岁';
			$counts[3][$result->xb] = $result->to_44;
			$counts[4]['title']     = '45~49岁';
			$counts[4][$result->xb] = $result->to_49;
			$counts[5]['title']     = '50~54岁';
			$counts[5][$result->xb] = $result->to_54;
			$counts[6]['title']     = '55~59岁';
			$counts[6][$result->xb] = $result->to_59;
			$counts[7]['title']     = '60~64岁';
			$counts[7][$result->xb] = $result->to_64;
			$counts[8]['title']     = '65岁以上';
			$counts[8][$result->xb] = $result->over_65;
			$counts[9]['title']     = '合计';
			$counts[9][$result->xb] = $result->total;
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