<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePastoralRequest;
use App\Http\Requests\UpdatePastoralRequest;
use App\Models\app\Pastoral;

class PastoralController extends Controller
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
     * @param  \App\Http\Requests\StorePastoralRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePastoralRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Pastoral  $pastoral
     * @return \Illuminate\Http\Response
     */
    public function show(Pastoral $pastoral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Pastoral  $pastoral
     * @return \Illuminate\Http\Response
     */
    public function edit(Pastoral $pastoral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePastoralRequest  $request
     * @param  \App\Models\app\Pastoral  $pastoral
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePastoralRequest $request, Pastoral $pastoral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Pastoral  $pastoral
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pastoral $pastoral)
    {
        //
    }
}
