<?php

namespace App\Http\Controllers\Admin;

use App\OnlineOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;


class OnlineOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $model = OnlineOrder::where('given','active')->get();

        return view('admin.online_order.index',[
            'model' => $model,
            'status' => 'active',

        ]);
    }
    public function index1(Request $request)
    {

        if ($request->status=='all') $model = OnlineOrder::get();
        if ($request->status=='active') $model = OnlineOrder::where('given','active')->get();
        if ($request->status=='inactive') $model = OnlineOrder::where('given','inactive')->get();

        return view('admin.online_order.index',[
            'model' => $model
        ])->with('status',$request->status);
    }
    public function list(){
        // $model = OnlineOrder::where('given','active')->get();
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
// dd($request);     
          $this->validate($request,[
            'category_id'=>'required|integer',
            'texnics_id'=>'required|integer',
            'viloyat'=>'required',
            'tuman'=>'required',
            'nomi'=>'required',
            'date'=>'required|date',
            'number'=>'required|integer',
        ]);
          OnlineOrder::create([
            'category_id'=>$request->category_id,
            'texnics_id'=>$request->texnics_id,
            'viloyat'=>$request->viloyat,
            'tuman'=>$request->tuman,
            'nomi'=>$request->nomi,
            'date'=>$request->date,
            'number'=>$request->number,
          ]);

        return back()->with('success',"Ваш запрос был успешно отправлен");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Online_order  $online_order
     * @return \Illuminate\Http\Response
     */
    public function show(OnlineOrder $online_order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Online_order  $online_order
     * @return \Illuminate\Http\Response
     */
    public function edit(OnlineOrder $online_order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Online_order  $online_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OnlineOrder $online_order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Online_order  $online_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnlineOrder $online_order)
    {
        //
    }
    public function status(Request $request){
// dd($request->holat);
        $model = OnlineOrder::find($request->id);
        $status = '';
        if($model->given==='active'){
            $status = 'inactive';
        } 
        else{
            $status = 'active';
        }

        $model->update([
            'given' => $status
        ]);

        if ($request->holat=='all') $order = OnlineOrder::get();
        if ($request->holat=='active') $order = OnlineOrder::where('given','active')->get();
        if ($request->holat=='inactive') $order = OnlineOrder::where('given','inactive')->get();

        return view('admin.online_order.index',[
            'model' => $order,
            'status' =>$request->holat,
        ])->with(['success'=>'success']);
    }
}
