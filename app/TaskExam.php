<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskExam extends Model {

	protected $table = 'task_exams';
    protected $fillable = ['task_title', 'task_condition', 'task_video'];

}
