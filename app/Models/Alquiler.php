<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $table = 'alquileres';

    protected $fillable = ['moto_acuatica_id', 'cliente', 'fecha', 'horas'];

    // Un alquiler pertenece a una moto acuática
    public function motoAcuatica()
    {
        return $this->belongsTo(MotoAcuatica::class);
    }
}
