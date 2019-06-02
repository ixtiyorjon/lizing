<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends AppModels
{
    protected $translatable = ['title','body'];

    public static function Short($text){
    	
    	if (strlen($text) > 150) {
            return substr($text,0,150).'.....';
        }
        else{
            return $text;
        }
    }
}
