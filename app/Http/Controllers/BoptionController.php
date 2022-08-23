<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBoptionRequest;
use App\Http\Requests\UpdateBoptionRequest;
use App\Models\app\Bot\Boption;

class BoptionController extends Controller
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
     * @param  \App\Http\Requests\StoreBoptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBoptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Bot\Boption  $boption
     * @return \Illuminate\Http\Response
     */
    public function show(Boption $boption)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Bot\Boption  $boption
     * @return \Illuminate\Http\Response
     */
    public function edit(Boption $boption)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBoptionRequest  $request
     * @param  \App\Models\app\Bot\Boption  $boption
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBoptionRequest $request, Boption $boption)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Bot\Boption  $boption
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boption $boption)
    {
        //
    }
}
