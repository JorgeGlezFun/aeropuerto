<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billete extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'vuelo_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function vuelo(){
        return $this->belongsTo(Vuelo::class);
    }
}
