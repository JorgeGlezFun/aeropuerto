<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    use HasFactory;

    public function vuelosLlegada(){
        return $this->hasMany(Vuelo::class, 'aeropuerto_llegada_id');
    }

    public function vuelosSalida(){
        return $this->hasMany(Vuelo::class, 'aeropuerto_salida_id');
    }
}
