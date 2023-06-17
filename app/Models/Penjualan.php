<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'jumlah_terjual',
        'harga_jual',
        'tanggal_terjual',
        'pembayaran',
];
    
public function penjualan()
{
    return $this->hasMany(Admins::class);
    return $this->hasMany(Ternak::class);
    return $this->hasMany(gudang::class);
}

}
