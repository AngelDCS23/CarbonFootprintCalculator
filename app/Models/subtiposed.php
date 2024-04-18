<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subtiposed extends Model{
    protected $table = "subtiposed";

    protected $fillable = [
        'fk_idED',
        'Nombre'
    ];

    public $timestamps = false;
}