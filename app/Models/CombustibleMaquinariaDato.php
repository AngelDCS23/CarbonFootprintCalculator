<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CombustibleMaquinariaDato extends Model
{
    use HasFactory;

    protected $table = 'combustible_maquinaria_datos';

    protected $fillable = [
        'fk_idSector',
        'fk_idAnio',
        'Gasoleo_B_l',
        'Gasoleo_l',
        'B7_l',
        'B10_l',
        'B20_l',
        'B30_l',
        'B100_l',
        'Gasolina_l',
        'E5_l',
        'E10_l',
        'E85_l',
        'E100_l',
    ];
}
