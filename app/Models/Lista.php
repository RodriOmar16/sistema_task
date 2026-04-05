<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    /** @use HasFactory<\Database\Factories\ListaFactory> */
    use HasFactory;
    protected $primaryKey = 'lista_id';

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'proyecto_id');
    }

    public function tarjetas()
    {
        return $this->hasMany(Tarjeta::class, 'lista_id');
    }
}
