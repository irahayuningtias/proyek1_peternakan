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
        'tanggal_beli',
        'tanggal_expired'
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
