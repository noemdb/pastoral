<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExcerciseRequest;
use App\Http\Requests\UpdateExcerciseRequest;
use App\Models\app\Teacher\Excercise;

class ExcerciseController extends Controller
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
     * @param  \App\Http\Requests\StoreExcerciseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExcerciseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Teacher\Excercise  $excercise
     * @return \Illuminate\Http\Response
     */
    public function show(Excercise $excercise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Teacher\Excercise  $excercise
     * @return \Illuminate\Http\Response
     */
    public function edit(Excercise $excercise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExcerciseRequest  $request
     * @param  \App\Models\app\Teacher\Excercise  $excercise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExcerciseRequest $request, Excercise $excercise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Teacher\Excercise  $excercise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Excercise $excercise)
    {
        //
    }
}
