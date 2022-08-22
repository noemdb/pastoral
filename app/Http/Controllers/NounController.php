<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNounRequest;
use App\Http\Requests\UpdateNounRequest;
use App\Models\app\Pescolar\Noun;

class NounController extends Controller
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
     * @param  \App\Http\Requests\StoreNounRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNounRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Pescolar\Noun  $noun
     * @return \Illuminate\Http\Response
     */
    public function show(Noun $noun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Pescolar\Noun  $noun
     * @return \Illuminate\Http\Response
     */
    public function edit(Noun $noun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNounRequest  $request
     * @param  \App\Models\app\Pescolar\Noun  $noun
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNounRequest $request, Noun $noun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Pescolar\Noun  $noun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noun $noun)
    {
        //
    }
}
