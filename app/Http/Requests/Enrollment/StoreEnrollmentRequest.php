<?php

namespace App\Http\Requests\Enrollment;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnrollmentRequest extends FormRequest
{
    protected $stopOnFirstFailure = false;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // dd('123');
        return [
            'pastoral_id'=>'required',
            'name'=>'required',
            'lastname'=>'required',
            'citype_id'=>'required',
            'ci'=>'required',
            'gender'=>'required',
            'date_birth'=>'required|date',
            'city_birth'=>'required',
            'town_hall_birth'=>'required',
            'state_birth'=>'required',
            'dir_address'=>'required',
            'phone'=>'required',
            'email'=>'required|email',
            'status_nacionality'=>'required',
            'status_patology'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'body.required' => 'A message is required',
        ];
    }

    public function attributes()
    {
        return [
            'pastoral_id' => 'Institución',
            'name' => 'Nombres',
            'lastname' => 'Apellidos',
            'citype_id' => 'Tipo de Identifica',
            'ci' => 'N.Identifica',
            'gender' => 'N.Identifica',
            'date_birth' => 'Fecha de nacimiento',
            'city_birth' => 'Ciudad de nacimiento',
            'town_hall_birth' => 'Municipio de nacimiento',
            'state_birth' => 'Estado de nacimiento',
            'dir_address' => 'Dirección de residencia',
            'phone' => 'Número de teléfono',
            'email' => 'Correo electrónico',
            'status_nacionality' => 'Nacionalizado',
            'status_patology' => 'Tratado por especialistas',
        ];
    }
}
