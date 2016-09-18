<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class SaveExpertRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return Auth::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'zjxm'       => 'required',
			'csny'       => 'numeric|date_format:Ym|size:6',
			'gj'         => 'required',
			'zjzl'       => 'required',
			'sfzh'       => 'required|size:18',
			'xxdm'       => 'required',
			'xxmc'       => 'required',
			'szbm'       => 'required',
			'yjxkm'      => 'required',
			'zgxw'       => 'required',
			'zyjszw'     => 'required',
			'dslb'       => 'required',
			'dslb2'      => 'required',
			'rsgxsfbx'   => 'required',
			'szdwsfsyxw' => 'required',
			'rdsny'      => 'numeric|date_format:Ym|size:6',
			'txdz'       => 'required',
			'yzbm'       => 'required|numeric|size:6',
			'yddh'       => 'required|numeric|size:11',
			'dzxx'       => 'required|email',
		];
	}
}
