<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class empresagrat extends Model
{
  protected $table = "empresagrat";
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Num_Hoteles',
    ];
}
