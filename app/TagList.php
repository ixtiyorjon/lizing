<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagList extends AppModels
{
    public $table = "tagslist";
    protected $translatable = ['name'];
    public $fillable = ['name','value','texnics_id','taxnic_id'];
}
