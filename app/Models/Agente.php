<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Agente
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Prospecto[] $prospectos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Agente extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prospectos()
    {
        return $this->hasMany('App\Models\Prospecto', 'agente_id', 'id');
    }
    

}
