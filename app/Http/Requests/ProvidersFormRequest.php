<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProvidersFormRequest extends FormRequest
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
            'nombre' => 'required|min:3',
            'direccion' => 'required|min:3',
        ];
    }
}
