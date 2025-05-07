<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'num_telf',
        'premium',
        'puesto',
        'fk_idEmpresaGrat',
        'fk_idEmpresa',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function empresagrat()
    {
        return $this->belongsTo(EmpresaGrat::class, 'fk_idEmpresaGrat', 'id');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'fk_idEmpresa', 'id');
    }

}
