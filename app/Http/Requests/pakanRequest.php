<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pakanRequest extends FormRequest
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
            'id_pakan'         => 'required',
            'id_admin'         => 'required',
            'nama_pakan'       => 'required',
            'jumlah'           => 'required',
            'tanggal_beli'     => 'required',
            'tanggal_expired'  => 'required',
        ];
    }
}