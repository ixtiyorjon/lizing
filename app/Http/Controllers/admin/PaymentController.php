<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Payment;
use App\Treaty;
use App\UserInn;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class PaymentController extends Controller
{
    public function list($id,$user_id=null){
        $model = Payment::where('treaties_id',$id)->get();
        $treaty = Treaty::find($id);

        if(request()->ajax()){       
            $html = View::make('admin.treaties.include.payment_list',[
                'model'=>$model,
                'treaty'=>$treaty,
            ])->render();
            
            return $html;
        }
        else{
            return view('admin.payments.list',[
                'model'=>$model,
                'treaty'=>$treaty,
                'user_id'=>$user_id,
            ]);
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date_from'=>'required',
            'date_to'=>'required',
            'date_payment'=>'required',
            'to_be_paid'=>'required|numeric',
            'paid'=>'required|numeric',
            'treaties_id'=>'required',
        ]);

        Payment::create([
            'date_from'=>$request->date_from,
            'date_to'=>$request->date_to,
            'date_payment'=>$request->date_payment,
            'to_be_paid'=> $request->to_be_paid,
            'paid'=> $request->paid,
            'treaties_id'=>$request->treaties_id,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $model = Payment::find($id);

        $html = View::make('admin.payments.edit',['model'=>$model])->render();
        
        return $html;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Payment::find($id);
// dd($request->inn);
        $request->validate([
            'date_from'=>'required',
            'date_to'=>'required',
            'date_payment'=>'required',
            'to_be_paid'=>'required|numeric',
            'paid'=>'required|numeric'
        ]);


        $model->update([
            'date_from'=>$request->date_from,
            'date_to'=>$request->date_to,
            'date_payment'=>$request->date_payment,
            'to_be_paid'=> $request->to_be_paid,
            'paid'=> $request->paid
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Payment::find($id)->delete();

        return back();
    }
}
