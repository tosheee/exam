<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TaskExamRequest;
use App\Http\Requests\TaskCodeRequest;
use App\TaskExam;
use App\TaskCode;
use Illuminate\Http\Request;

class AdminTaskExamController extends Controller {
        private $oldTask;

    public function __construct(TaskExam $oldTask){
        $this->oldTask = $oldTask;
    }

	public function index()
	{
		return view('admin.addtask');
	}

	public function createTask(TaskExamRequest $request, TaskExam $taskExam){

        $taskExam->create($request->all());
        $oldTask = $this->oldTask->get();
        return view('admin.addcode' , compact('oldTask'));
    }
    public function createCode(TaskCodeRequest $request, TaskCode $taskCode){

        $taskCode->create($request->all());
        $oldTask = $this->oldTask->get();
        return view('admin.addcode', compact('oldTask'));
    }
    public function viewForm(){
        $oldTask = $this->oldTask->get();
        return view('admin.addcode', compact('oldTask'));
    }
}
