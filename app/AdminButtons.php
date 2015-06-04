<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminButtons extends Model {

     protected $table = 'admin_buttons';
    protected $fillable = ['url', 'title_button'];

}
