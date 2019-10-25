<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserInn;
use Illuminate\Support\Facades\View;


class UserInnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $model = UserInn::paginate(30);

        return view('admin.user-inn.index',[
            'model' => $model
        ]);
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
            'inn'=>'required|min:9|max:9|unique:pgsql.user_inns',
        ]);

        UserInn::create([
            'inn' => $request->inn
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
        $model = UserInn::find($id);

        $html = View::make('admin.user-inn.edit',['model'=>$model])->render();
        
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
        $model = UserInn::find($id);
// dd($request->inn);
        $request->validate([
            'inn'=>'required|min:9|max:9|unique:pgsql.user_inns',
        ]);


        $model->update([
            'inn' => $request->inn
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
        UserInn::find($id)->delete();

        return back();
    }
    public function find(){

        $model = UserInn::where('inn','LIKE',"%{$_POST['inn']}%")->get();

        $html = View::make('admin.user-inn.include.table',['model'=>$model])->render();
        
        return $html;
    }
}
