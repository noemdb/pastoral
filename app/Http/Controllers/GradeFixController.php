<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGradeFixRequest;
use App\Http\Requests\UpdateGradeFixRequest;
use App\Models\app\Estudiant\GradeFix;

class GradeFixController extends Controller
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
     * @param  \App\Http\Requests\StoreGradeFixRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGradeFixRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Estudiant\GradeFix  $gradeFix
     * @return \Illuminate\Http\Response
     */
    public function show(GradeFix $gradeFix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Estudiant\GradeFix  $gradeFix
     * @return \Illuminate\Http\Response
     */
    public function edit(GradeFix $gradeFix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGradeFixRequest  $request
     * @param  \App\Models\app\Estudiant\GradeFix  $gradeFix
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGradeFixRequest $request, GradeFix $gradeFix)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Estudiant\GradeFix  $gradeFix
     * @return \Illuminate\Http\Response
     */
    public function destroy(GradeFix $gradeFix)
    {
        //
    }
}
