<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Regimen
 *
 * @property $id
 * @property $regimenfiscal
 * @property $created_at
 * @property $updated_at
 *
 * @property Contribuyente[] $contribuyentes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Regimen extends Model
{
    
    static $rules = [
		'regimenfiscal' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['regimenfiscal'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contribuyentes()
    {
        return $this->hasMany('App\Models\Contribuyente', 'regimen_id', 'id');
    }
    

}
