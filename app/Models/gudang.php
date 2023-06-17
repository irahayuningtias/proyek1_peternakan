<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;

    protected $table='Gudang';
    protected $primaryKey = 'id_gudang';
    protected $fillable = [
        'id_gudang', 
        'id_ternak',
        'id_admin',
        'jenis_hasil',
        'jumlah',
        'harga_unit',
        'tanggal_masuk',
        'tanggal_keluar',
    ];
    
    public function gudang()
    {
        return $this->hasMany(Admins::class);
        return $this->hasMany(Ternak::class);
    } 
    
}
