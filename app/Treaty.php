<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treaty extends Model
{
    // protected $connection = 'pgsql';
    protected $fillable = ['treaty_number','treaty_name','date','date_end','number','price','inn_id'];
}
