<?php

namespace App\Http\Controllers;

use App\Useful_ustaf;
use Illuminate\Http\Request;

class UsefulUstafController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('useful_ustaf.index');
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
     * @param  \App\Useful_ustaf  $useful_ustaf
     * @return \Illuminate\Http\Response
     */
    public function show(Useful_ustaf $useful_ustaf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Useful_ustaf  $useful_ustaf
     * @return \Illuminate\Http\Response
     */
    public function edit(Useful_ustaf $useful_ustaf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Useful_ustaf  $useful_ustaf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Useful_ustaf $useful_ustaf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Useful_ustaf  $useful_ustaf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Useful_ustaf $useful_ustaf)
    {
        //
    }
}
