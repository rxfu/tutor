<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class SaveTutorRequest extends Request {

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
			'zjhm'    => 'required|size:18',
			'dslb'    => 'required',
			'yjxkdm'  => 'required',
			'ejxkdm'  => 'required',
			'sfjzds'  => 'required',
			'jzdsdw'  => 'required_if:sfjzds,1',
			'dsdl'    => 'required',
			'xm'      => 'required',
			'xb'      => 'required',
			'csny'    => 'required|date_format:Ym',
			'gbm'     => 'required',
			'mzm'     => 'required',
			'zzmmm'   => 'required',
			'xxdm'    => 'required|size:5',
			'xxmc'    => 'required',
			'szbm'    => 'required',
			'zgxl'    => 'required',
			'zgxw'    => 'required',
			'sxzy'    => 'required',
			'zyzc'    => 'required',
			'wgyslcd' => 'required_with:wgyyz',
			'txdz'    => 'required',
			'yzbm'    => 'required',
			'lxdh'    => 'required_without:dzyx',
			'dzyx'    => 'required_without:lxdh',
		];
	}
}
