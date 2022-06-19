<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ternak extends Model
{
    use HasFactory;
    protected $table='ternak';
    protected $primaryKey = 'id_ternak';
    
    protected $fillable = [
        'id_ternak',
        'id_pakan',
        'id_admin',
        'jumlah',
        'jenis_ternak',
        'tanggal_masuk',
        'tanggal_keluar',
    ];


    public function ternak(){
        return $this->hasMany(Admins::class);
        return $this->hasMany(Pakan::class);
    }

}
