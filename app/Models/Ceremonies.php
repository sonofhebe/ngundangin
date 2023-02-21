<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ceremonies extends Model
{
    use HasFactory;

    protected $table = 'adat';
    protected $primaryKey = 'idAdat';
    protected $fillable = [
        'iduser',
        'penjelasan'
    ];
}
