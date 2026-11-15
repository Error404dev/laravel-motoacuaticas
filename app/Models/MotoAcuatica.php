<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MotoAcuatica extends Model
{
    protected $table = 'motos_acuaticas';

    protected $fillable = ['marca', 'modelo', 'precio_hora'];

    // Una moto acuática tiene muchos alquileres
    public function alquileres()
    {
        return $this->hasMany(Alquiler::class);
    }
}
