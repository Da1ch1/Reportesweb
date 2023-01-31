<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Soporte
 *
 * @property $id
 * @property $Fecha_inicio
 * @property $Fecha_fin
 * @property $Hora_inicio
 * @property $Hora_fin
 * @property $Cliente
 * @property $Asunto
 * @property $spejecutivo_id
 * @property $Evidencia
 * @property $PostVenta
 * @property $Comentarios
 * @property $created_at
 * @property $updated_at
 *
 * @property Spejecutivo $spejecutivo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Soporte extends Model
{
    
    static $rules = [
		'Fecha_inicio' => 'required',
		'Fecha_fin' => 'required',
		'Hora_inicio' => 'required',
		'Hora_fin' => 'required',
		'Cliente' => 'required',
		'Asunto' => 'required',
		'spejecutivo_id' => 'required',
		'PostVenta' => 'required',
		'Comentarios' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Fecha_inicio','Fecha_fin','Hora_inicio','Hora_fin','Cliente','Asunto','spejecutivo_id','Evidencia','PostVenta','Comentarios'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function spejecutivo()
    {
        return $this->hasOne('App\Models\Spejecutivo', 'id', 'spejecutivo_id');
    }
    

}
