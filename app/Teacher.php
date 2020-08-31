<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
        use SoftDeletes;
    protected $fillable = [
      'user_id','address','phone','gender','nrc','photo'
    ];

      public function subject(){
    	return $this->belongsTo('App\Subject');
    }
        public function user(){
    	return $this->belongsTo('App\User');
    }

    //  public function Timetable(){
    // 	return $this->hasMany('App\Timetable');
    // }
    //   public function Testpaper(){
    // 	return $this->hasMany('App\Testpaper');
    // }
}
