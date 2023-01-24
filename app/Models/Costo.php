<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Costo
 *
 * @property $id
 * @property $costos
 * @property $created_at
 * @property $updated_at
 *
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Costo extends Model
{
    
    static $rules = [
		'costos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['costos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'costo_id', 'id');
    }
    

}
