<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
// 	protected $connection = 'pgsql';
    protected $fillable = ['date_from','date_to','date_payment','to_be_paid','paid','treaties_id']; 
}
