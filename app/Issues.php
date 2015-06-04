<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Issues extends Eloquent {

	protected $table = 'issues';
    protected $fillable = ['question','ans_a','ans_b','ans_c','ans_d','test_id'];

}
