<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePensumRequest;
use App\Http\Requests\UpdatePensumRequest;
use App\Models\app\Pescolar\Pensum;

class PensumController extends Controller
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
     * @param  \App\Http\Requests\StorePensumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePensumRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Pescolar\Pensum  $pensum
     * @return \Illuminate\Http\Response
     */
    public function show(Pensum $pensum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Pescolar\Pensum  $pensum
     * @return \Illuminate\Http\Response
     */
    public function edit(Pensum $pensum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePensumRequest  $request
     * @param  \App\Models\app\Pescolar\Pensum  $pensum
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePensumRequest $request, Pensum $pensum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Pescolar\Pensum  $pensum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pensum $pensum)
    {
        //
    }
}
