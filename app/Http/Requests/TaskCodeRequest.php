<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaskCodeRequest extends Request {

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
			'task_notes'=>'required',
            'task_code'=>'required',
            'taskexam_id'=>'required'
		];
	}

}
