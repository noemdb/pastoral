<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTiTeacherRequest;
use App\Http\Requests\UpdateTiTeacherRequest;
use App\Models\app\TiTeacher;

class TiTeacherController extends Controller
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
     * @param  \App\Http\Requests\StoreTiTeacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTiTeacherRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\TiTeacher  $tiTeacher
     * @return \Illuminate\Http\Response
     */
    public function show(TiTeacher $tiTeacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\TiTeacher  $tiTeacher
     * @return \Illuminate\Http\Response
     */
    public function edit(TiTeacher $tiTeacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTiTeacherRequest  $request
     * @param  \App\Models\app\TiTeacher  $tiTeacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTiTeacherRequest $request, TiTeacher $tiTeacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\TiTeacher  $tiTeacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(TiTeacher $tiTeacher)
    {
        //
    }
}
