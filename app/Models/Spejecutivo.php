<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Spejecutivo
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Soporte[] $soportes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Spejecutivo extends Model
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
    public function soportes()
    {
        return $this->hasMany('App\Models\Soporte', 'spejecutivo_id', 'id');
    }
    

}
