<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Marketing
 *
 * @property $id
 * @property $fecha
 * @property $actividad
 * @property $red_social
 * @property $mkejecutivo_id
 * @property $estatus
 * @property $comentarios
 * @property $created_at
 * @property $updated_at
 *
 * @property Marketing[] $marketings
 * @property Marketing $marketing
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Marketing extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'actividad' => 'required',
		'red_social' => 'required',
		'mkejecutivo_id' => 'required',
		'estatus' => 'required',
		'comentarios' => 'required',
    ];

    protected $perPage = 20;
    public const Redsocial = ['Whatsapp', 'Facebook', 'Tik tok', 'Instagram', 'Youtube'];

    public function red_social()
    {
        return self::Redsocial[$this->red_social];
    }
    public const ESTATUS = ['Pendiente', 'Cancelado', 'Hecho'];

    public function estatus()
    {
        return self::ESTATUS[$this->estatus];
    }

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','actividad','red_social','mkejecutivo_id','estatus','comentarios'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function marketings()
    {
        return $this->hasMany('App\Models\Marketing', 'mkejecutivo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marketing()
    {
        return $this->hasOne('App\Models\Marketing', 'id', 'mkejecutivo_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mkejecutivo()
    {
        return $this->hasOne('App\Models\Mkejecutivo', 'id', 'mkejecutivo_id');
    }

}
