<?php

namespace App\Models;

<<<<<<< HEAD
use App\Models\Gudang;
=======
>>>>>>> 103d15c71387173374f6cd6c2b4a43a7c3e423c9
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
