<?php

namespace Tis\Tutor\Services;

use Illuminate\Support\Facades\DB;

class StatisticsService {

	public function countByGender() {
		$query   = "SELECT xb, mc, SUM(IF(age < 30, 1, 0)) AS 'under_30', SUM(IF(age BETWEEN 30 AND 34, 1, 0)) AS 'to_34', SUM(IF(age BETWEEN 35 AND 39, 1, 0)) AS 'to_39', SUM(IF(age BETWEEN 40 AND 44, 1, 0)) AS 'to_44', SUM(IF(age BETWEEN 45 AND 49, 1, 0)) AS 'to_49', SUM(IF(age BETWEEN 50 AND 54, 1, 0)) AS 'to_54', SUM(IF(age BETWEEN 55 AND 59, 1, 0)) AS 'to_59', SUM(IF(age BETWEEN 60 AND 64, 1, 0)) AS 'to_64', SUM(IF(age >= 65, 1, 0)) AS 'over_65', COUNT(*) AS total FROM (SELECT xb, TIMESTAMPDIFF(YEAR, csny, CURDATE()) AS age FROM y_ds_dsxx) AS derived INNER JOIN y_xb ON xb = dm GROUP BY xb, mc ORDER BY xb";
		$results = DB::select($query);

		return collect($results);
	}

	public function countByCollege() {
		$query   = 'SELECT szbm, mc, SUM(IF(dslb = 1 AND sfjzds = 0, 1, 0)) AS xnsdrs, SUM(IF(dslb = 1 AND sfjzds = 1, 1, 0)) AS jzsdrs, SUM(IF(dslb = 2 AND sfjzds = 0, 1, 0)) AS xnbdrs, SUM(IF(dslb = 2 AND sfjzds = 1, 1, 0)) AS jzbdrs FROM y_ds_dsxx INNER JOIN y_xy ON szbm = dm GROUP BY szbm ORDER BY szbm';
		$results = DB::select($query);

		return $results;
	}

	public function countByDegree() {
		$query   = "SELECT zgxw, SUM(IF(age < 30, 1, 0)) AS 'under_30', SUM(IF(age BETWEEN 30 AND 34, 1, 0)) AS 'to_34', SUM(IF(age BETWEEN 35 AND 39, 1, 0)) AS 'to_39', SUM(IF(age BETWEEN 40 AND 44, 1, 0)) AS 'to_44', SUM(IF(age BETWEEN 45 AND 49, 1, 0)) AS 'to_49', SUM(IF(age BETWEEN 50 AND 54, 1, 0)) AS 'to_54', SUM(IF(age BETWEEN 55 AND 59, 1, 0)) AS 'to_59', SUM(IF(age BETWEEN 60 AND 64, 1, 0)) AS 'to_64', SUM(IF(age >= 65, 1, 0)) AS 'over_65', COUNT(*) AS total FROM (SELECT zgxw, TIMESTAMPDIFF(YEAR, csny, CURDATE()) AS age FROM y_ds_dsxx) AS derived GROUP BY zgxw ORDER BY zgxw";
		$results = DB::select($query);

		return collect($results);
	}

	public function countByPosition() {
		$query   = "SELECT zyzc, mc, SUM(IF(age < 30, 1, 0)) AS 'under_30', SUM(IF(age BETWEEN 30 AND 34, 1, 0)) AS 'to_34', SUM(IF(age BETWEEN 35 AND 39, 1, 0)) AS 'to_39', SUM(IF(age BETWEEN 40 AND 44, 1, 0)) AS 'to_44', SUM(IF(age BETWEEN 45 AND 49, 1, 0)) AS 'to_49', SUM(IF(age BETWEEN 50 AND 54, 1, 0)) AS 'to_54', SUM(IF(age BETWEEN 55 AND 59, 1, 0)) AS 'to_59', SUM(IF(age BETWEEN 60 AND 64, 1, 0)) AS 'to_64', SUM(IF(age >= 65, 1, 0)) AS 'over_65', COUNT(*) AS total FROM (SELECT zyzc, TIMESTAMPDIFF(YEAR, csny, CURDATE()) AS age FROM y_ds_dsxx) AS derived INNER JOIN y_dszc ON zyzc = dm GROUP BY zyzc, mc ORDER BY zyzc";
		$results = DB::select($query);

		return collect($results);
	}

	public function countByDiscipline() {
		$query   = "SELECT yjxkdm, mc, SUM(IF(age < 30, 1, 0)) AS 'under_30', SUM(IF(age BETWEEN 30 AND 34, 1, 0)) AS 'to_34', SUM(IF(age BETWEEN 35 AND 39, 1, 0)) AS 'to_39', SUM(IF(age BETWEEN 40 AND 44, 1, 0)) AS 'to_44', SUM(IF(age BETWEEN 45 AND 49, 1, 0)) AS 'to_49', SUM(IF(age BETWEEN 50 AND 54, 1, 0)) AS 'to_54', SUM(IF(age BETWEEN 55 AND 59, 1, 0)) AS 'to_59', SUM(IF(age BETWEEN 60 AND 64, 1, 0)) AS 'to_64', SUM(IF(age >= 65, 1, 0)) AS 'over_65', COUNT(*) AS total FROM (SELECT yjxkdm, TIMESTAMPDIFF(YEAR, csny, CURDATE()) AS age FROM y_ds_dsxx) AS derived INNER JOIN y_yjxk ON yjxkdm = dm GROUP BY yjxkdm, mc ORDER BY yjxkdm";
		$results = DB::select($query);

		return collect($results);
	}

	public function countBySubdiscipline() {
		$query   = 'SELECT szbm, mc, dslb, dsdl, ejxkdm, ejxkmc, count(*) AS rs FROM y_ds_dsxx INNER JOIN y_xy ON szbm = dm GROUP BY szbm, dslb, dsdl, ejxkdm ORDER BY szbm, dslb, dsdl, ejxkdm';
		$results = DB::select($query);

		return $results;
	}
}