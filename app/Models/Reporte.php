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
        'PostVenta',
        'Comentarios',
    ];
    protected $dates = ['Fecha_inicio','Fecha_fin'];
    public const EJECUTIVO = ['Paco', 'Dante', 'Luisillo', 'Soporte'];

    public function Ejecutivo()
    {
        return self::EJECUTIVO[$this->Ejecutivo];
    }
    public const ESTATUS = ['Pendiente', 'Cancelado', 'Hecho'];

    public function Estatus()
    {
        return self::ESTATUS[$this->Estatus];
    }

}
