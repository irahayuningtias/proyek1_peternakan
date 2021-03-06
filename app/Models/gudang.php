<?php

namespace App\Models;

use App\Models\gudang;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gudang extends Model
{
    use HasFactory;

    protected $table='gudang';
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
