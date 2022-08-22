<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEstudiantRequest;
use App\Http\Requests\UpdateEstudiantRequest;
use App\Models\app\Estudiant;

class EstudiantController extends Controller
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
     * @param  \App\Http\Requests\StoreEstudiantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstudiantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Estudiant  $estudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiant $estudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Estudiant  $estudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiant $estudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEstudiantRequest  $request
     * @param  \App\Models\app\Estudiant  $estudiant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstudiantRequest $request, Estudiant $estudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Estudiant  $estudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiant $estudiant)
    {
        //
    }
}
