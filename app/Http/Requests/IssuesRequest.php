<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class IssuesRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'question'=>'required',
            'ans_a'=>'required',
            'ans_b'=>'required',
            'ans_c'=>'required',
            'ans_d'=>'required',
            'test_id'=>'required'
		];
	}

}
