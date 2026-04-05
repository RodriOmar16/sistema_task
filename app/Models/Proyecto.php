<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    /** @use HasFactory<\Database\Factories\ProyectoFactory> */
    use HasFactory;
    
    protected $primaryKey = 'proyecto_id';
    protected $fillable = [
        'nombre',
        'descripcion',
        'inhabilitado',
    ];

    public function listas()
    {
        return $this->hasMany(Lista::class, 'proyecto_id');
    }
}
