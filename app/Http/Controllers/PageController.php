<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function page($slug){
    	$model = Page::where('slug',$slug)->first();

    	return view('pages.index',[
    		'model' => $model
    	]);
    }
}
