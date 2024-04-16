<?php

// app/Models/Anio.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anio extends Model
{
    protected $table = 'anios';

    protected $fillable = [
        'Anio',
    ];

    public $timestamps = false;
}
