<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
      use SoftDeletes;
    protected $fillable = [
      'total_amount','status','left_over_amount'
     
    ];

   
  
}
