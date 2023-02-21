<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sambutan extends Model
{
    use HasFactory;

    protected $table = 'sambutan';
    protected $primaryKey = 'idSambutan';
    protected $fillable = [
        'iduser',
        'pembukaSambutan',
        'isiSambutan',
        'penutupSambutan'
    ];
}
