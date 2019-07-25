<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appeal;

class AppealController extends Controller
{

    public function appeal(Request $request){
    	$request->validate([
		    'name' => 'required',
		    'email' => 'required|email',
		    'subject' => 'required',
		    'comment' => 'required',
		]);

    	Appeal::create($request->all());
    	return back();
    }
}
