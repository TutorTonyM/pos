<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarEmpleado extends FormRequest
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
            'primer_nombre' => ['required', 'string', 'min:5', 'max:20'],
            'segundo_nombre' => ['nullable', 'string', 'max:20'],
            'primer_apellido' => ['required', 'string', 'min:2', 'max:20'],
            'segundo_apellido' => ['nullable', 'string', 'max:20'],
            'direccion' => ['required', 'string', 'min:5', 'max:50'],
            'ciudad' => ['required', 'string', 'min:2', 'max:30'],
            'estado' => ['required', 'string', 'min:2', 'max:30'],
            'codigo_postal' => ['required', 'numeric', 'min:2'],
            'telefono' => ['required', 'numeric'],
            'telefono2' => ['nullable', 'numeric'],
            'activo' => ['boolean'],
        ];
    }
}
