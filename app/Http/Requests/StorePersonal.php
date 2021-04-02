<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonal extends FormRequest
{
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
        return [
            'nombre'=>'required',
            'apellido'=>'required',
            'cargo'=>'required',
            'condicion'=>'required',
            'plaza'=>'required',
            'dni'=>'required',
            'jornada'=>'required',
            'estado'=>'required'
        ];
    }

    //se puso attributes en lang/es de value de view edit aca de create/store
    public function attributes()
    {
        return [
            'plaza' => 'tipo de plaza',
            'jornada' => 'jornada laboral'
        ];
    }

}
