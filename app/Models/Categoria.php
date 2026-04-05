<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriaFactory> */
    use HasFactory;
    protected $primaryKey = 'categoria_id';

    public function tarjetas()
    {
        return $this->belongsToMany(Tarjeta::class, 'categoria_tarjetas', 'categoria_id', 'tarjeta_id');
    }
}
