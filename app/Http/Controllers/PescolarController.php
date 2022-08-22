<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePescolarRequest;
use App\Http\Requests\UpdatePescolarRequest;
use App\Models\app\Pescolar;

class PescolarController extends Controller
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
     * @param  \App\Http\Requests\StorePescolarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePescolarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Pescolar  $pescolar
     * @return \Illuminate\Http\Response
     */
    public function show(Pescolar $pescolar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Pescolar  $pescolar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pescolar $pescolar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePescolarRequest  $request
     * @param  \App\Models\app\Pescolar  $pescolar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePescolarRequest $request, Pescolar $pescolar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Pescolar  $pescolar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pescolar $pescolar)
    {
        //
    }
}
