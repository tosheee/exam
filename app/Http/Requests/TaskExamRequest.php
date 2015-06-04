<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TaskExamRequest extends Request {

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
			'task_title'=>'required',
            'task_condition'=>'required',
            'task_video'=>'required',
		];
	}

}
