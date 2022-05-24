<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penjualan;

class Penjualan extends Model
{
    use HasFactory;
    protected $table='penjualan';
    protected $primaryKey = 'id_penjualan';

    protected $fillable = [
        'id_penjualan',
        'id_admin',
        'id_ternak',
        'id_gudang',
        'jumlah',
        'harga_unit',
        'pembayaran',
        'tanggal_beli'
];
    
public function admins()
{
    return $this->belongsTo(Admins::class);
}
public function ternak()
{
    return $this->belongsTo(Ternak::class);
}
public function gudang()
{
    return $this->belongsTo(Gudang::class);
}
}
