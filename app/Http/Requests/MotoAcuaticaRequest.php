<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotoAcuaticaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'marca'       => 'required|max:255',
            'modelo'      => 'required|max:255',
            'precio_hora' => 'required|numeric|min:0',
        ];
    }
}
