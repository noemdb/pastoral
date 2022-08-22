<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLapseRequest;
use App\Http\Requests\UpdateLapseRequest;
use App\Models\app\Pescolar\Lapse;

class LapseController extends Controller
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
     * @param  \App\Http\Requests\StoreLapseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLapseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Pescolar\Lapse  $lapse
     * @return \Illuminate\Http\Response
     */
    public function show(Lapse $lapse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Pescolar\Lapse  $lapse
     * @return \Illuminate\Http\Response
     */
    public function edit(Lapse $lapse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLapseRequest  $request
     * @param  \App\Models\app\Pescolar\Lapse  $lapse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLapseRequest $request, Lapse $lapse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Pescolar\Lapse  $lapse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lapse $lapse)
    {
        //
    }
}
