<?php

namespace Tis\Tutor\Services;

use Illuminate\Support\Facades\DB;

class StatisticsService {

	public function countByGender() {
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

	public function countByCollege() {
		$query   = 'SELECT szbm, mc, SUM(IF(dslb = 1 AND sfjzds = 0, 1, 0)) AS xnsdrs, SUM(IF(dslb = 1 AND sfjzds = 1, 1, 0)) AS jzsdrs, SUM(IF(dslb = 2 AND sfjzds = 0, 1, 0)) AS xnbdrs, SUM(IF(dslb = 2 AND sfjzds = 1, 1, 0)) AS jzbdrs FROM y_ds_dsxx INNER JOIN y_xy ON szbm = dm GROUP BY szbm ORDER BY szbm';
		$results = DB::select($query);

		return $results;
	}

	public function countByDegree() {
		$query   = "SELECT zgxw, SUM(IF(age < 30, 1, 0)) AS 'under_30', SUM(IF(age BETWEEN 30 AND 34, 1, 0)) AS 'to_34', SUM(IF(age BETWEEN 35 AND 39, 1, 0)) AS 'to_39', SUM(IF(age BETWEEN 40 AND 44, 1, 0)) AS 'to_44', SUM(IF(age BETWEEN 45 AND 49, 1, 0)) AS 'to_49', SUM(IF(age BETWEEN 50 AND 54, 1, 0)) AS 'to_54', SUM(IF(age BETWEEN 55 AND 59, 1, 0)) AS 'to_59', SUM(IF(age BETWEEN 60 AND 64, 1, 0)) AS 'to_64', SUM(IF(age >= 65, 1, 0)) AS 'over_65', COUNT(*) AS total FROM (SELECT zgxw, TIMESTAMPDIFF(YEAR, csny, CURDATE()) AS age FROM y_ds_dsxx) AS derived GROUP BY zgxw ORDER BY zgxw";
		$results = DB::select($query);

		$counts = [];
		foreach ($results as $result) {
			$counts[0]['title']       = '30岁以下';
			$counts[0][$result->zgxw] = $result->under_30;
			$counts[1]['title']       = '30~34岁';
			$counts[1][$result->zgxw] = $result->to_34;
			$counts[2]['title']       = '35~39岁';
			$counts[2][$result->zgxw] = $result->to_39;
			$counts[3]['title']       = '40~44岁';
			$counts[3][$result->zgxw] = $result->to_44;
			$counts[4]['title']       = '45~49岁';
			$counts[4][$result->zgxw] = $result->to_49;
			$counts[5]['title']       = '50~54岁';
			$counts[5][$result->zgxw] = $result->to_54;
			$counts[6]['title']       = '55~59岁';
			$counts[6][$result->zgxw] = $result->to_59;
			$counts[7]['title']       = '60~64岁';
			$counts[7][$result->zgxw] = $result->to_64;
			$counts[8]['title']       = '65岁以上';
			$counts[8][$result->zgxw] = $result->over_65;
			$counts[9]['title']       = '合计';
			$counts[9][$result->zgxw] = $result->total;
		}

		return $counts;
	}

	public function countByPosition() {
		$query   = "SELECT zyzc, SUM(IF(age < 30, 1, 0)) AS 'under_30', SUM(IF(age BETWEEN 30 AND 34, 1, 0)) AS 'to_34', SUM(IF(age BETWEEN 35 AND 39, 1, 0)) AS 'to_39', SUM(IF(age BETWEEN 40 AND 44, 1, 0)) AS 'to_44', SUM(IF(age BETWEEN 45 AND 49, 1, 0)) AS 'to_49', SUM(IF(age BETWEEN 50 AND 54, 1, 0)) AS 'to_54', SUM(IF(age BETWEEN 55 AND 59, 1, 0)) AS 'to_59', SUM(IF(age BETWEEN 60 AND 64, 1, 0)) AS 'to_64', SUM(IF(age >= 65, 1, 0)) AS 'over_65', COUNT(*) AS total FROM (SELECT zyzc, TIMESTAMPDIFF(YEAR, csny, CURDATE()) AS age FROM y_ds_dsxx) AS derived GROUP BY zyzc ORDER BY zyzc";
		$results = DB::select($query);

		$counts = [];
		foreach ($results as $result) {
			$counts[0]['title']       = '30岁以下';
			$counts[0][$result->zyzc] = $result->under_30;
			$counts[1]['title']       = '30~34岁';
			$counts[1][$result->zyzc] = $result->to_34;
			$counts[2]['title']       = '35~39岁';
			$counts[2][$result->zyzc] = $result->to_39;
			$counts[3]['title']       = '40~44岁';
			$counts[3][$result->zyzc] = $result->to_44;
			$counts[4]['title']       = '45~49岁';
			$counts[4][$result->zyzc] = $result->to_49;
			$counts[5]['title']       = '50~54岁';
			$counts[5][$result->zyzc] = $result->to_54;
			$counts[6]['title']       = '55~59岁';
			$counts[6][$result->zyzc] = $result->to_59;
			$counts[7]['title']       = '60~64岁';
			$counts[7][$result->zyzc] = $result->to_64;
			$counts[8]['title']       = '65岁以上';
			$counts[8][$result->zyzc] = $result->over_65;
			$counts[9]['title']       = '合计';
			$counts[9][$result->zyzc] = $result->total;
		}

		return $counts;
	}

	public function countByDiscipline() {
		$query   = "SELECT yjxkdm, SUM(IF(age < 30, 1, 0)) AS 'under_30', SUM(IF(age BETWEEN 30 AND 34, 1, 0)) AS 'to_34', SUM(IF(age BETWEEN 35 AND 39, 1, 0)) AS 'to_39', SUM(IF(age BETWEEN 40 AND 44, 1, 0)) AS 'to_44', SUM(IF(age BETWEEN 45 AND 49, 1, 0)) AS 'to_49', SUM(IF(age BETWEEN 50 AND 54, 1, 0)) AS 'to_54', SUM(IF(age BETWEEN 55 AND 59, 1, 0)) AS 'to_59', SUM(IF(age BETWEEN 60 AND 64, 1, 0)) AS 'to_64', SUM(IF(age >= 65, 1, 0)) AS 'over_65', COUNT(*) AS total FROM (SELECT yjxkdm, TIMESTAMPDIFF(YEAR, csny, CURDATE()) AS age FROM y_ds_dsxx) AS derived GROUP BY yjxkdm ORDER BY yjxkdm";
		$results = DB::select($query);

		$counts = [];
		foreach ($results as $result) {
			$counts[0]['title']         = '30岁以下';
			$counts[0][$result->yjxkdm] = $result->under_30;
			$counts[1]['title']         = '30~34岁';
			$counts[1][$result->yjxkdm] = $result->to_34;
			$counts[2]['title']         = '35~39岁';
			$counts[2][$result->yjxkdm] = $result->to_39;
			$counts[3]['title']         = '40~44岁';
			$counts[3][$result->yjxkdm] = $result->to_44;
			$counts[4]['title']         = '45~49岁';
			$counts[4][$result->yjxkdm] = $result->to_49;
			$counts[5]['title']         = '50~54岁';
			$counts[5][$result->yjxkdm] = $result->to_54;
			$counts[6]['title']         = '55~59岁';
			$counts[6][$result->yjxkdm] = $result->to_59;
			$counts[7]['title']         = '60~64岁';
			$counts[7][$result->yjxkdm] = $result->to_64;
			$counts[8]['title']         = '65岁以上';
			$counts[8][$result->yjxkdm] = $result->over_65;
			$counts[9]['title']         = '合计';
			$counts[9][$result->yjxkdm] = $result->total;
		}

		return $counts;
	}

	public function countBySubdiscipline() {
		$query   = 'SELECT szbm, mc, dslb, dsdl, ejxkdm, ejxkmc, count(*) AS rs FROM y_ds_dsxx INNER JOIN y_xy ON szbm = dm GROUP BY szbm, dslb, dsdl, ejxkdm ORDER BY szbm, dslb, dsdl, ejxkdm';
		$results = DB::select($query);

		return $results;
	}
}