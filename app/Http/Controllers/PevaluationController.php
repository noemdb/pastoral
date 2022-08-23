<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePevaluationRequest;
use App\Http\Requests\UpdatePevaluationRequest;
use App\Models\app\Teacher\Pevaluation;

class PevaluationController extends Controller
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
     * @param  \App\Http\Requests\StorePevaluationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePevaluationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Teacher\Pevaluation  $pevaluation
     * @return \Illuminate\Http\Response
     */
    public function show(Pevaluation $pevaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Teacher\Pevaluation  $pevaluation
     * @return \Illuminate\Http\Response
     */
    public function edit(Pevaluation $pevaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePevaluationRequest  $request
     * @param  \App\Models\app\Teacher\Pevaluation  $pevaluation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePevaluationRequest $request, Pevaluation $pevaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Teacher\Pevaluation  $pevaluation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pevaluation $pevaluation)
    {
        //
    }
}
