<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
      use SoftDeletes;
    protected $fillable = [
      'user_id','address','phone','gender','nrc','photo'
     
    ];

   
        public function user(){
    	return $this->belongsTo('App\User');
    }

   
}
