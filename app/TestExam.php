<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class TestExam extends Eloquent {

	protected $table = 'test_exams';
    protected $fillable = ['test_title'];

}
