<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model {

	protected $table = 'answers';
    protected $fillable = ['answer', 'test_id'];

}
