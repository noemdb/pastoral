<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharismaRequest;
use App\Http\Requests\UpdateCharismaRequest;
use App\Models\app\Pescolar\Charisma;

class CharismaController extends Controller
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
     * @param  \App\Http\Requests\StoreCharismaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharismaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Pescolar\Charisma  $charisma
     * @return \Illuminate\Http\Response
     */
    public function show(Charisma $charisma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Pescolar\Charisma  $charisma
     * @return \Illuminate\Http\Response
     */
    public function edit(Charisma $charisma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharismaRequest  $request
     * @param  \App\Models\app\Pescolar\Charisma  $charisma
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCharismaRequest $request, Charisma $charisma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Pescolar\Charisma  $charisma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charisma $charisma)
    {
        //
    }
}
