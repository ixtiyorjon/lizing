<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends AppModels
{
    protected $translatable = ['comment', 'address'];
}
