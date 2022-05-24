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


    public function admins(){
        return $this->belongsTo(Admins::class);
    }

    public function pakan(){
        return $this->belongsTo(Pakan::class);
    }
}
