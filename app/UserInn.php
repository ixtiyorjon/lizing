<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInn extends Model
{
	// protected $table = 'user_inns'
    // protected $connection = 'pgsql';
    protected $fillable = ['inn','sms_code'];
}
