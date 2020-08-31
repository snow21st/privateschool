<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
     use SoftDeletes;
    protected $fillable = [
      'user_id','address','phone','gender','dob','photo',
      'guardian_name','guardian_phone','guardian_address','guardian_nrc','guardian_occupation'
    ];

   
        public function user(){
    	return $this->belongsTo('App\User');
    }

     public function Timetable(){
    	return $this->hasMany('App\Timetable');
    }
   

}
