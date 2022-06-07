<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TernakRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_ternak'      => 'required',
            'id_admin'       => 'required',
            'hasil_ternak'    => 'required',
            'jumlah'         => 'required',
            'tanggal_masuk'  => 'required',
            'tanggal_keluar' => 'required',
        ];
    }
}