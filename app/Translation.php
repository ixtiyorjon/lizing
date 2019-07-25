<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $fillable = ['table_name', 'column_name' ,'foreign_key' ,'locale', 'value'];
}
