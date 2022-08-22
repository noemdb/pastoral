<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCitypeRequest;
use App\Http\Requests\UpdateCitypeRequest;
use App\Models\app\Estudiant\Citype;

class CitypeController extends Controller
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
     * @param  \App\Http\Requests\StoreCitypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCitypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Estudiant\Citype  $citype
     * @return \Illuminate\Http\Response
     */
    public function show(Citype $citype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Estudiant\Citype  $citype
     * @return \Illuminate\Http\Response
     */
    public function edit(Citype $citype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCitypeRequest  $request
     * @param  \App\Models\app\Estudiant\Citype  $citype
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCitypeRequest $request, Citype $citype)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Estudiant\Citype  $citype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citype $citype)
    {
        //
    }
}
