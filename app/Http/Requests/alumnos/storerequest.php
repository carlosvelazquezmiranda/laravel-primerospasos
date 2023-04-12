<?php

namespace App\Http\Requests\alumnos;

use Illuminate\Foundation\Http\FormRequest;

class storerequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //Nombre , edad , Direccion , fecha_cumpleanios
            "Nombre" => "required|min:3|max:150",
            "edad" => "required|min:5|max:109|integer",
            "fecha_cumpleanios" => "required"

        ];
    }
}
