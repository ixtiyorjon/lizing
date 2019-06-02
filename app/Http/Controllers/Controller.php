<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Slider;
use App\About;
use App\Link;
use App\News;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
    	$slider = Slider::orderBy('id','DESC')->get();
    	$about = About::first();
    	$link = Link::get();
    	$new = News::where('status','active')->orderBy('id','DESC')->first();
    	$news = News::where('status','active')->orderBy('id','DESC')->get();

    	return view('index',[
    		'slider' => $slider, 
    		'about' => $about,
    		'link' => $link, 
    		'new' => $new, 
    		'news' => $news, 
    	]);
    }
}
