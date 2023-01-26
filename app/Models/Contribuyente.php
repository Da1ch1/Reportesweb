<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contribuyente
 *
 * @property $id
 * @property $rfc
 * @property $nombre
 * @property $regimenf
 * @property $created_at
 * @property $updated_at
 *
 * @property Avance[] $avances
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contribuyente extends Model
{
    
    static $rules = [
		'rfc' => 'required',
		'nombre' => 'required',
		'regimenf' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rfc','nombre','regimenf'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function avances()
    {
        return $this->hasMany('App\Models\Avance', 'contribuyente_id', 'id');
    }
    

}
