<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Admins extends Model {
    use HasFactory; 
    protected $primaryKey = 'id_admin';
    protected $table = 'admins';



    protected $fillable = [
        'id_admin',
        'nama_admin',
        'jenis_kelamin',
        'alamat',
        'no_hp'
    ];
    
    public function admins()
    {
        return $this->belongsTo(Admins::class);
        return $this->hasMany(Pakan::class);
        return $this->hasMany(Ternak::class);
        return $this->hasMany(Penjualan::class);
    }

}
