<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
         use SoftDeletes;
    protected $fillable = [
      'name','grade_id'
    ];
        public function grade(){
    	return $this->belongsTo('App\Grade');
    }
     public function Timetable(){
    	return $this->hasMany('App\Timetable');
    }

    
     
}
