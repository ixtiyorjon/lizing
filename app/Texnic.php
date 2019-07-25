<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Texnic extends AppModels
{
    protected $translatable = ['name'];
    protected $fillable = ['name', 'narxi','avans_summ','avans','yillik_foiz','muddat','dostavka','slug','image'];
}
