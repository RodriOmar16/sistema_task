<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    /** @use HasFactory<\Database\Factories\TareaFactory> */
    use HasFactory;

    protected $primaryKey = 'tarea_id';
    protected $fillable = [
        'tarjeta_id',
        'completada',
        'inhabilitada',
    ];

    public $incrementing = false; // porque es VARCHAR

    public function tarjeta()
    {
        return $this->belongsTo(Tarjeta::class, 'tarjeta_id');
    }
}
