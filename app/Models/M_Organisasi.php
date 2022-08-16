<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class M_Organisasi extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'organisasi';
    protected $fillable = [
        'nama',
        'alamat',
        'alamat_web',
        'catatan',
        'provinsi',
        'kabupaten',
        'foto'
    ];
    
}
