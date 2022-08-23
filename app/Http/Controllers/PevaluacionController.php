<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePevaluacionRequest;
use App\Http\Requests\UpdatePevaluacionRequest;
use App\Models\app\Teacher\Pevaluacion;

class PevaluacionController extends Controller
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
     * @param  \App\Http\Requests\StorePevaluacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePevaluacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Teacher\Pevaluacion  $pevaluacion
     * @return \Illuminate\Http\Response
     */
    public function show(Pevaluacion $pevaluacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Teacher\Pevaluacion  $pevaluacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Pevaluacion $pevaluacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePevaluacionRequest  $request
     * @param  \App\Models\app\Teacher\Pevaluacion  $pevaluacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePevaluacionRequest $request, Pevaluacion $pevaluacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Teacher\Pevaluacion  $pevaluacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pevaluacion $pevaluacion)
    {
        //
    }
}
