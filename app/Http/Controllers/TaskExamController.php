<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TaskExam;
use DB;
class TaskExamController extends Controller {
    private $task;

    public function __construct(TaskExam $taskExam){
        $this->task = $taskExam;

    }
    /*
         * списък с тестовете
         * */
    public function index()
    {
        $tasks = $this->task->get();
        return view('taskexam.choosetask', compact('tasks'));
    }
    /*
     * избор на тест и визуализация
     * */
    public function showItemTask($id = 0)
    {
        $item = DB::table('task_exams')
            ->where('task_exams.id', '=', $id)
            ->join('task_codes', 'taskexam_id', '=', 'task_exams.id')
            ->select('task_exams.id', 'task_exams.task_title','task_exams.task_condition', 'task_exams.task_video', 'task_codes.task_notes','task_codes.task_code','task_codes.taskexam_id')
            ->get();
        return view('taskexam.viewtask', compact('item'));
    }
}
