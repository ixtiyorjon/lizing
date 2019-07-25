<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends AppModels
{
    protected $translatable = ['title', 'body'];
}
