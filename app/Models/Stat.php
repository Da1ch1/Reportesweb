<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Stat
 *
 * @property $id
 * @property $estatus
 * @property $created_at
 * @property $updated_at
 *
 * @property Soporte[] $soportes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Stat extends Model
{
    
    static $rules = [
		'estatus' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estatus'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function soportes()
    {
        return $this->hasMany('App\Models\Soporte', 'stat_id', 'id');
    }
    

}
