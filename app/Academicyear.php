<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Academicyear extends Model
{

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
