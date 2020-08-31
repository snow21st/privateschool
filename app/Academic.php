<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Academic extends Model
{
    use SoftDeletes;
    protected $fillable = [
      'year','startdate','enddate'
    ];
     public function studentdetail(){
    	return $this->hasMany('App\Studentdetail');
    }
      public function timetable(){
    	return $this->hasMany('App\Timetable');
    }
}
