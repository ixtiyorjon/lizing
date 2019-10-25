<?php

namespace App\Http\Controllers;

use App\OnlineOrder;
use App\Texnic;
use App\TexnicsCategory;
use Illuminate\Http\Request;
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
        $model = OnlineOrder::where('given','active')->orderBy('date','asc')->get();

        return view('online_order.index',[
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
        //
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
    public function texnicsList(){
        
        if($_GET['category']=='category'){

            $texnics_category = Texnic::where('texnics_category',$_GET['category_id'])->get(); 
            $texnics_category = View::make('online_order.collection',['model'=>$texnics_category])->render();

            $category = TexnicsCategory::find($_GET['category_id']);

            $order = OnlineOrder::where(['given'=>'active','category_id'=>$_GET['category_id']])->get();    
            $order = View::make('online_order.table',[
                'model'=>$order,
                'category'=>$category,
                'category_id'=>$_GET['category_id'],
                'cat_name'=>$_GET['category']
            ])->render();
            
            return ['html'=>$texnics_category,'model'=>$order];
        }

        if($_GET['category']=='texnics'){

            $category = Texnic::find($_GET['category_id']);

            $order = OnlineOrder::where(['given'=>'active','texnics_id'=>$_GET['category_id']])->get();    
            $order = View::make('online_order.table',[
                'model'=> $order,
                'category'=> $category,
                'category_id'=> $_GET['category_id'],
                'cat_name'=> $_GET['category']
            ])->render();
            
            return ['model'=>$order];
        }
    }
}
