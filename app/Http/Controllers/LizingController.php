<?php

namespace App\Http\Controllers;

use App\Lizing;
use Illuminate\Http\Request;
use App\TexnicsCategory;
use App\TexnicsSubcategory;
use App\Texnic;
use Illuminate\Support\Facades\View;

class LizingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function texnics($slug,$id=null)
    {
        // dd($id);
        $texnics_category = TexnicsCategory::get();
        $Breadcrumbs = TexnicsCategory::where('slug',$slug)->first();
        $subcat = TexnicsSubcategory::where('slug',$id)->first();

        if(!$id) $texnics = Texnic::where('texnics_category',$Breadcrumbs->id)->paginate(10);

        if($id) $texnics = Texnic::where(['texnics_category'=>$Breadcrumbs->id,'texnics_subcategory'=>$subcat->id])->paginate(10);

        if (request()->ajax()) {
            return View::make('lizing.index',[
                'texnics_category' => $texnics_category,
                'Breadcrumbs' => $Breadcrumbs,
                'texnics' => $texnics,
            ])->renderSections()['content'];
        }
        return view('lizing.index',[
            'texnics_category' => $texnics_category,
            'Breadcrumbs' => $Breadcrumbs,
            'texnics' => $texnics,
        ]);
    }

    public function category()
    {
        $texnics_category = TexnicsCategory::get();

        if (request()->ajax()) {
            return View::make('lizing.category',[
                'texnics_category' => $texnics_category,
            ])->renderSections()['content'];
        }

        return view('lizing.category',[
            'texnics_category' => $texnics_category,
        ]);
    }

    public function more($slug){
        $model = Texnic::where('slug',$slug)->first();        
        
        if (request()->ajax()) {
            return View::make('lizing.more',[
                'model' => $model
            ])->renderSections()['content'];
        }
        
        return view('lizing.more',[
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
     * @param  \App\Lizing  $lizing
     * @return \Illuminate\Http\Response
     */
    public function show(Lizing $lizing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lizing  $lizing
     * @return \Illuminate\Http\Response
     */
    public function edit(Lizing $lizing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lizing  $lizing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lizing $lizing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lizing  $lizing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lizing $lizing)
    {
        //
    }
}
