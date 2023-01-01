<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    // protected $table='kecamatans';
    protected $fillable=[
        'nama',
        'nama_kec',
        'nama_desa',
        'no_hp1',
        'no_hp2',
    ];

}
