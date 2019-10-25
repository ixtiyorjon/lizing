<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use App\City;

class CityController extends Controller
{
    public function list(){
    	$model = City::where('region_id',$_POST['region_id'])->get();    
        
        $html = View::make('admin.include.citylist',['model'=>$model])->render();
        
        return $html;
    } 
}
