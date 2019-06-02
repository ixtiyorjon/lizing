<?php

namespace App\Http\Controllers;

use App\Lizing;
use Illuminate\Http\Request;

class LizingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lizing.index');
    }

    public function index2()
    {
        return view('lizing.index2');
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
