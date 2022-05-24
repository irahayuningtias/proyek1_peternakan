<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Pakan;

class Pakan extends Model
{
    use HasFactory;
    protected $table='pakan';
    protected $primaryKey = 'id_pakan';

protected $fillable = [
        'id_pakan',
        'id_admin',
        'nama_pakan',
        'jumlah',
        'tanggal_beli',
        'tanggal_expired'
];
    
public function admins()
{
    return $this->belongsTo(Admins::class);
}

}
