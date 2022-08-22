<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTauthorityRequest;
use App\Http\Requests\UpdateTauthorityRequest;
use App\Models\app\Pastoral\Tauthority;

class TauthorityController extends Controller
{
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
     * @param  \App\Http\Requests\StoreTauthorityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTauthorityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Pastoral\Tauthority  $tauthority
     * @return \Illuminate\Http\Response
     */
    public function show(Tauthority $tauthority)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Pastoral\Tauthority  $tauthority
     * @return \Illuminate\Http\Response
     */
    public function edit(Tauthority $tauthority)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTauthorityRequest  $request
     * @param  \App\Models\app\Pastoral\Tauthority  $tauthority
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTauthorityRequest $request, Tauthority $tauthority)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Pastoral\Tauthority  $tauthority
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tauthority $tauthority)
    {
        //
    }
}
