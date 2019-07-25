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
use App\Partner;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
    	$slider = Slider::orderBy('id','DESC')->get();
    	$about = About::first();
    	$link = Link::get();
    	$partner = Partner::orderBy('id','DESC')->get();
    	$news = News::where('status','active')->orderBy('id','DESC')->limit(6)->get();

        $string = file_get_contents("http://cbu.uz/ru/arkhiv-kursov-valyut/json/");
        $valuta = json_decode($string, true);
        // print_r($valuta);
        $valyuta = [
            1 => [
                    'summ' => $valuta[0]['Rate'],
                    'Ccy' => $valuta[0]['Ccy'],
                    'Diff' => $valuta[0]['Diff'],
                    'Date' => $valuta[0]['Date']
                    ],
            2 => [
                    'summ' => $valuta[1]['Rate'],
                    'Ccy' => $valuta[1]['Ccy'],
                    'Diff' => $valuta[1]['Diff'],
                    'Date' => $valuta[1]['Date'],

                    ],
            3 => [
                    'summ' => $valuta[2]['Rate'],
                    'Ccy' => $valuta[2]['Ccy'],
                    'Diff' => $valuta[2]['Diff'],
                    'Date' => $valuta[2]['Date'],

                    ],
            4 => [
                    'summ' => $valuta[4]['Rate'],
                    'Ccy' => $valuta[4]['Ccy'],
                    'Diff' => $valuta[4]['Diff'],
                    'Date' => $valuta[4]['Date'],

                    ],
            5 => [
                    'summ' => $valuta[13]['Rate'],
                    'Ccy' => $valuta[13]['Ccy'],
                    'Diff' => $valuta[13]['Diff'],
                    'Date' => $valuta[13]['Date'],

                    ],
            6 => [
                    'summ' => $valuta[3]['Rate'],
                    'Ccy' => $valuta[3]['Ccy'],
                    'Diff' => $valuta[3]['Diff'],
                    'Date' => $valuta[3]['Date'],

                    ]
        ];

    	return view('index',[
    		'slider' => $slider, 
    		'about' => $about,
    		'link' => $link,
            'news' => $news, 
            'partner' => $partner, 
    		'valyuta' => $valyuta, 
    	]);
    }
}
