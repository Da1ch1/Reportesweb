<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    protected $table = 'reportes';
    protected $fillable = [
        'Fecha_inicio',
        'Fecha_fin',
        'Hora_inicio',
        'Hora_fin',
        'Cliente',
        'Asunto',
        'Ejecutivo',
        'Estatus',
        'Evidencia',
        'Post-Venta',
        'Comentarios',
    ];
    protected $dates = ['Fecha_inicio','Fecha_fin'];
}
