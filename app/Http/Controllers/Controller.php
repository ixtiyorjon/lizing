<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Session;

use App\AppModels;
use App\Slider;
use App\About;
use App\Link;
use App\News;
use App\Partner;
use App\Pull;
use App\TexnicsCategory;
use App\Texnic;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){

        // Session::forget('UserInn');
        // Session::forget('sms_code');

    	$slider = Slider::orderBy('id','DESC')->get();
    	$about = About::first();
        $link = Link::get();
    	$texnic_category = TexnicsCategory::limit(11)->get();
    	$partner = Partner::orderBy('id','DESC')->get();
    	$news = News::where('status','active')->orderBy('id','DESC')->limit(6)->get();

        if (request()->ajax()) {
            return View::make('index',[
                'slider' => $slider, 
                'about' => $about,
                'link' => $link,
                'news' => $news, 
                'partner' => $partner, 
                'texnic_category' => $texnic_category, 
                'valyuta' => AppModels::valuta(), 
            ])->renderSections()['content'];
        }

    	return view('index',[
    		'slider' => $slider, 
    		'about' => $about,
    		'link' => $link,
            'news' => $news, 
            'partner' => $partner, 
            'texnic_category' => $texnic_category, 
    		'valyuta' => AppModels::valuta(), 
    	]);
    }
    public function gerb(){
        return view('ramzlar.gerb');
    }

    public function poll(Request $request){

        // Session::set('poll', $request->poll);
        session()->put('poll', $request->poll);

        Pull::create([
            'pull' => $request->poll,
        ]);
        return back();
    } 
    public function bayroq(){
        return view('ramzlar.bayroq');
    }
    public function madhiya(){
        return view('ramzlar.madhiya');
    }

    public function calculator(){

        return view('calculator'); 
    }

    public function calculatorTexnic($id){
        $model = Texnic::find($id);

        $t_sum = $model->narxi;
        $arr_foiz = preg_split ("/\,/", $model->yillik_foiz);
        $arr_muddat = preg_split ("/\,/", $model->muddat);
        $arr_avans = preg_split ("/\,/", $model->avans);
        $avans_summ = '<option>'.$model->avans_summ.'</option>';
        $dostavka = '<option>'.$model->dostavka.'</option>';

        $yillik_foiz='';
        for ($i=0; $i < count($arr_foiz); $i++) { 
            $yillik_foiz .= '<option>'.$arr_foiz[$i].'</option>';
        }

        $muddat='';
        for ($i=0; $i < count($arr_muddat); $i++) { 
            $muddat .= '<option>'.$arr_muddat[$i].'</option>';
        }

        $avans='';
        for ($i=0; $i < count($arr_avans); $i++) { 
            $avans .= '<option>'.$arr_avans[$i].'</option>';
        }

        return response()->json([
            't_sum' => $t_sum,
            'yillik_foiz' => $yillik_foiz,
            'muddat' => $muddat,
            'avans' => $avans,
            'avans_summ' => $avans_summ,
            'dostavka' => $dostavka,
        ]); 
    }
}
