<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRepresentantRequest;
use App\Http\Requests\UpdateRepresentantRequest;
use App\Models\app\Estudiant\Representant;

class RepresentantController extends Controller
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
     * @param  \App\Http\Requests\StoreRepresentantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRepresentantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Estudiant\Representant  $representant
     * @return \Illuminate\Http\Response
     */
    public function show(Representant $representant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Estudiant\Representant  $representant
     * @return \Illuminate\Http\Response
     */
    public function edit(Representant $representant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRepresentantRequest  $request
     * @param  \App\Models\app\Estudiant\Representant  $representant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRepresentantRequest $request, Representant $representant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Estudiant\Representant  $representant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Representant $representant)
    {
        //
    }
}
