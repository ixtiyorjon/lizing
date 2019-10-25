<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Treaty;
use App\UserInn;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class TreatyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function list($id){
        $model = Treaty::where('inn_id',$id)->paginate(20);
        $userid= UserInn::find($id);

        return view('admin.treaties.index',[
            'model' => $model,
            'id' => $id,
            'userid' => $userid,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'treaty_number'=>'required|integer',
            'treaty_name'=>'required|string',
            'date'=>'required',
            'date_end'=>'required',
            'number'=>'required|integer',
            'price'=>'required|integer',
            'inn_id'=>'required|integer',
        ]);

        Treaty::create($request->all());

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
        $model = Treaty::find($id);

        $html = View::make('admin.treaties.edit',['model'=>$model])->render();
        
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
        $model = Treaty::find($id);
// dd($request->inn);
        $request->validate([
            'treaty_number'=>'required|integer',
            'treaty_name'=>'required|string',
            'date'=>'required',
            'date_end'=>'required',
            'number'=>'required|integer',
            'price'=>'required|integer',
            'inn_id'=>'required|integer',
        ]);


        $model->update($request->all());

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
        Treaty::find($id)->delete();
        return back();
    }
}
