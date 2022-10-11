<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EspecialidadRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Id_especilidad' => ['required', 'integer', 'unique:especialidades,Id_especialidad', 'max:255'],
            'Nombre_especialidad' => ['required', 'string', 'unique:especialidades,Nombre_especialidad', 'max:255'] ,
            'Descripcion' => ['required', 'string', 'unique:especialidades,descripcion', 'max:255']
        ];
    }


    public function withValidator($validator)
    {
        $validator->after(function($validator){
            if($validator->errors()->count()){
                if(!in_array($this->method(), ['PUT', 'PATCH'])) {
                    $validator->errors()->add('post', true);
                }
            }
        });
    }
}
