<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'compania_id',
        'n_asientos',
        'precio',
        'aeropuerto_llegada_id',
        'aeropuerto_salida_id',
        'fecha_salida',
        'fecha_llegada'
    ];

    public function billetes(){
        return $this->hasMany(Billete::class);
    }

    public function aeropuertoLlegada(){
        return $this->belongsTo(Aeropuerto::class, 'aeropuerto_llegada_id');
    }

    public function aeropuertoSalida(){
        return $this->belongsTo(Aeropuerto::class, 'aeropuerto_salida_id');
    }

    public function compania(){
        return $this->belongsTo(Compania::class);
    }
}
