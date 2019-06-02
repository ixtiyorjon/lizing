<?php

namespace App\Http\Controllers;

use App\OnlineOrder;
use Illuminate\Http\Request;

class OnlineOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('online_order.index');
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
}
