<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaTarjeta extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriaTarjetaFactory> */
    use HasFactory;

    protected $primaryKey = 'categoria_tarjeta_id';
    protected $fillable = [
        'categoria_id',
        'tarjeta_id',
    ];

}
