<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seguimiento
 *
 * @property $id
 * @property $seguimiento
 * @property $created_at
 * @property $updated_at
 *
 * @property Prospecto[] $prospectos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Seguimiento extends Model
{
    
    static $rules = [
		'seguimiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['seguimiento'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prospectos()
    {
        return $this->hasMany('App\Models\Prospecto', 'seguimiento_id', 'id');
    }
    

}
