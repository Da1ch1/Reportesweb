<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prospecto
 *
 * @property $id
 * @property $Nombre
 * @property $Contacto
 * @property $Servicio
 * @property $Medio_contacto
 * @property $seguimiento_id
 * @property $agente_id
 * @property $Fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Agente $agente
 * @property Seguimiento $seguimiento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prospecto extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Contacto' => 'required',
		'Servicio' => 'required',
		'Medio_contacto' => 'required',
		'seguimiento_id' => 'required',
		'agente_id' => 'required',
		'Fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Contacto','Servicio','Medio_contacto','seguimiento_id','agente_id','Fecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function agente()
    {
        return $this->hasOne('App\Models\Agente', 'id', 'agente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function seguimiento()
    {
        return $this->hasOne('App\Models\Seguimiento', 'id', 'seguimiento_id');
    }
    

}
