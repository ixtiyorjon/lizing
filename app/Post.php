<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends ApopModels
{
    protected $translatable = ['title', 'seo_title','body','meta_description','meta_keywords','excerpt'];
}
