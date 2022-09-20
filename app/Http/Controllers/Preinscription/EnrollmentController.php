<?php

namespace App\Http\Controllers\Preinscription;

use App\Http\Controllers\Controller;
use App\Http\Requests\Enrollment\StoreEnrollmentRequest;
use App\Models\app\Estudiant\Enrollment;
use App\Models\app\Pastoral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $selectedPastoralId = (!empty($request->selectedPastoralId)) ? : null ;
        // $pastorals = Pastoral::all();
        $pastorals_list = Pastoral::all()->pluck('name','id')->toArray(); //dd($pastorals_list);
        $citype_list = ['1'=>'Cédula de Identidad','2'=>'Cédula Escolar','3'=>'Otro'];
        $gender_list = ['1'=>'Femenino','2'=>'Masculino'];
        $comment_enrollment = Enrollment::COLUMN_COMMENTS;
        return view('institutions.pastoral.index',compact('comment_enrollment','pastorals_list','selectedPastoralId','citype_list','gender_list'));
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
     * @param  \App\Http\Requests\StoreEnrollmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnrollmentRequest $request)
    {
        $enrollment = Enrollment::create($request->all());

        Session::flash('operp_ok','Registro guardado exitosamente');
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\app\Estudiant\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\app\Estudiant\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnrollmentRequest  $request
     * @param  \App\Models\app\Estudiant\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnrollmentRequest $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\app\Estudiant\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }
}
