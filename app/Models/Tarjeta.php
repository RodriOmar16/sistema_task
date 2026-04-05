<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    /** @use HasFactory<\Database\Factories\TarjetaFactory> */
    use HasFactory;

    protected $primaryKey = 'tarjeta_id';
    protected $fillable = [
        'lista_id',
        'title',
        'descripcion',
        'fecha_inicio',
        'fecha_entrega',
        'completado',
        'inhabilitado',
    ];

    public function lista()
    {
        return $this->belongsTo(Lista::class, 'lista_id');
    }

    public function tareas()
    {
        return $this->hasMany(Tarea::class, 'tarjeta_id');
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'categoria_tarjetas', 'tarjeta_id', 'categoria_id');
    }
}
