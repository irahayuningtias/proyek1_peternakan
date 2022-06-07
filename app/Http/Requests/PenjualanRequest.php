<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenjualanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_penjualan'  => 'required',
            'id_admin'      => 'required',
            'id_ternak'     => 'required',
            'id_gudang'     => 'required',
            'jumlah'        => 'required',
            'harga_unit'    => 'required',
            'pembayaran'    => 'required',
            'tanggal_beli'  => 'required'
        ];
    }
}