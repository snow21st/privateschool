<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
      use SoftDeletes;
    protected $fillable = [
      'name'
    ];
     public function classroom(){
    	return $this->hasMany('App\Classroom');
    }
  
}
