<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTinscriptionRequest;
use App\Http\Requests\UpdateTinscriptionRequest;
use App\Models\app\Estudiant\Tinscription;

class TinscriptionController extends Controller
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
     * @param  \App\Http\Requests\StoreTinscriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTinscriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Estudiant\Tinscription  $tinscription
     * @return \Illuminate\Http\Response
     */
    public function show(Tinscription $tinscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Estudiant\Tinscription  $tinscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Tinscription $tinscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTinscriptionRequest  $request
     * @param  \App\Models\app\Estudiant\Tinscription  $tinscription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTinscriptionRequest $request, Tinscription $tinscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Estudiant\Tinscription  $tinscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tinscription $tinscription)
    {
        //
    }
}
