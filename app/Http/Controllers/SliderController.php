<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function more($slug)
    {
        $model = Slider::where('slug',$slug)->first();

        return view('slider.index',[
            'model' => $model
        ]);
    }

    
}
