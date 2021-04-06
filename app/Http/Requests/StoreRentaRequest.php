<?php

namespace App\Http\Requests;

use App\Models\Renta;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreRentaRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('renta_create');
    }

    public function rules()
    {
        return [
            'cliente_id'   => [
                'required',
                'integer',
            ],
            'vehiculo_id'  => [
                'required',
                'integer',
            ],
            'fecha_inicio' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'fecha_fin'    => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
        ];
    }
}