<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    use HasFactory;
    protected $table = 'admins';


    public function pakan(){
        return $this->hasMany(Pakan::class);
    }
    protected $fillable = [
        'id_admin',
        'nama_admin',
        'jenis_kelamin',
        'alamat',
        'no_hp'
    ];
    
}
