<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resepsi extends Model
{
    use HasFactory;

    protected $table = 'resepsi';
    protected $primaryKey = 'idResepsi';
    protected $fillable = [
        'iduser',
        'namaPria',
        'namaWanita',
        'tglResepsi',
        'jamResepsi',
        'alamatResepsi',
        'namaGedung',
        'fileGambar',
        'maps'
    ];
}
