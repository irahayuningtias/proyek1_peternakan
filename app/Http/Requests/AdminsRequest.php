<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminsRequest extends FormRequest
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
            'id_admin'  => 'required',
            'nama_admin' => 'required',
            'jenis_kelamin' => 'required',
            'alamat'      => 'required',
            'no_hp'  => 'required'
        ];
    }
}