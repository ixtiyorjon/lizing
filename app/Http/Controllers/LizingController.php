<?php

namespace App\Http\Controllers;

use App\Lizing;
use Illuminate\Http\Request;
use App\TexnicsCategory;
use App\Texnic;

class LizingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function texnics($slug)
    {
        $texnics_category = TexnicsCategory::get();
        $Breadcrumbs = TexnicsCategory::where('slug',$slug)->first();
        $texnics = Texnic::where('texnics_category',$Breadcrumbs->id)->paginate(10);

        return view('lizing.index',[
            'texnics_category' => $texnics_category,
            'Breadcrumbs' => $Breadcrumbs,
            'texnics' => $texnics,
        ]);
    }

    public function category()
    {
        $texnics_category = TexnicsCategory::get();
        return view('lizing.category',[
            'texnics_category' => $texnics_category,
        ]);
    }

    public function more(){
        return view('lizing.more');
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
