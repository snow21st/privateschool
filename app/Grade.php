<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Grade extends Model
{

    protected $fillable = [
      'name'
    ];
     public function classroom(){
    	return $this->hasMany('App\Classroom');
    }
  
}
