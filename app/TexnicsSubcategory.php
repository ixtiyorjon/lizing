<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TexnicsSubcategory extends AppModels
{
	protected $translatable = ['title'];
	
    public static function getTexnics($id){
    	return TexnicsSubcategory::where('texnics_categories_id',$id)->get();
    }
}
