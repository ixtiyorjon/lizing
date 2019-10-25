<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInn;
use App\Treaty;
use App\Payment;
use Session;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function usercan(){

    	$model = UserInn::where('inn',$_POST['inn'])->first();

    	if($model) {
    		$message = 'Ushbu INN ro\'yhatdan o\'tkazilgan'; 
    		$success='success';
    	}
    	else{
    	 $message = 'Ushbu INN ro\'yhatdan o\'tkazilmagan'; 
    	 $success='error';
    	 }


    	return response()->json(['message'=>$message,'success'=>$success]);
    }

    public function innSend(){

    	$model = UserInn::where('inn',$_POST['inn'])->first();

    	if($model){
	    	// $_POST['phone'];
	    	$code = rand(111111,999999);

	    	Session::put('UserInn', $_POST['inn']);
	    	Session::put('sms_code', $code);


	    	$model->update([
	    		'sms_code' => $code
	    	]);

	    	$html = View::make('user.sms_form')->render();

	    	return response()->json(['sms_code'=>$code,'html'=>$html]);
	    }
	    else{
	    	return response()->json(['sms_code'=>'','html'=>'INN mavjud emas !!!']);
	    }
    }

    public function smsVerify(Request $request){

    	$model = UserInn::where('inn',Session::get('UserInn'))->first();

    	if ($model->sms_code == $request->sms_code) {

    		Session::put('sms_code', '');

    		$model->update([
	    		'sms_code' => ''
	    	]);
    	}
    	else{
    		return back()->with(['message'=>'sms codi xato,  tasdiqlanmadi']);
    	}

    	if (Session::get('UserInn')&&Session::get('sms_code')=='') {

    		return redirect('/user/cabinet');
    	}
    	else{
    		return redirect('/');
    	}
    }

    public function userCabinet(){


    	if (Session::get('UserInn')&&Session::get('sms_code')=='') {

    		$model = UserInn::where('inn',Session::get('UserInn'))->first();
    		$traty = Treaty::where('inn_id',$model->id)->get();

    		return view('user.cabinet',[
    			'model' => $model,
    			'traty' => $traty,
    		]);

    	}
    	else{
    		return redirect('/');
    	}

    }

    public function chiqish(){

    	Session::forget('UserInn');
    	Session::forget('sms_code');

    	return redirect('/');
    }
    public function paymentTable(){

    	$traty = Treaty::find($_POST['id']);

    	$model = Payment::where('treaties_id',$traty->id)->get();

    	$html = View::make('user.table',['model'=>$model])->render();

        return $html;
    }
}
