<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attendance extends Model
{
   
        use SoftDeletes;
    protected $fillable = [
      'date','status','student_id'
    ];

      public function student(){
    	return $this->belongsTo('App\Students');
    }
}
