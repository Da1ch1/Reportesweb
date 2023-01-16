<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReporteRequest extends FormRequest
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
            
                'Fecha_inicio' => 'nullable',
                'Fecha_fin' => 'nullable',
                'Hora_inicio' => 'nullable',
                'Hora_fin' => 'nullable',
                'Cliente' => 'required',
                'Asunto' => 'required',
                'Ejecutivo' => 'required|numeric|min:0|max:3',
                'Estatus' => 'required|numeric|min:0|max:2',
                'Evidencia' => 'required',
                'PostVenta' => 'nullable',
                'Comentarios' => 'nullable',
            
        ];
    }
}
