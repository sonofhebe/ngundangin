<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cerita extends Model
{
    use HasFactory;

    protected $table = 'cerita';
    protected $primaryKey = 'idCerita';
    protected $fillable = [
        'iduser',
        'judulCerita',
        'isiCerita',
        'gambarCerita'
    ];
}
