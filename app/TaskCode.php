<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskCode extends Model {

	protected $table = 'task_codes';
    protected $fillable = ['task_notes', 'task_code', 'taskexam_id'];

}
