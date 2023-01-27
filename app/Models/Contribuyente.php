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
    'email' => 'required',
    'telefono' => 'required',
    'factura_contraseña' => 'required',
    'nomina_contraseña' => 'required',
    'vencimiento_csd' => 'required',
    'ciec_contraseña' => 'required',
    'fiel_contraseña' => 'required',
    'vencimiento_fiel' => 'required',
    'ev_imss_usuario' => 'required',
    'ev_imss_contraseña' => 'required',
    'idse_usuario' => 'required',
    'idse_contraseña' => 'required',
    'sipare_usuario' => 'required',
    'sipare_contraseña' => 'required',
    'usuario_2' => 'required',
    'contraseña_2' => 'required',
    'infonavit_usuario' => 'required',
    'infonavit_contraseña' => 'required',
    'citas_jal_usuario' => 'required',
    'citas_jal_contraseña' => 'required',
    'sas_usuario' => 'required',
    'sas_contraseña' => 'required',
    'extra' => 'nullable',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rfc','nombre','regimenf','email','telefono','factura_contraseña','nomina_contraseña','vencimiento_csd','ciec_contraseña','fiel_contraseña','vencimiento_fiel','ev_imss_usuario','ev_imss_contraseña','idse_usuario','idse_contraseña','sipare_usuario','sipare_contraseña','usuario_2','contraseña_2','infonavit_usuario','infonavit_contraseña','citas_jal_usuario','citas_jal_contraseña','sas_usuario','sas_contraseña','extra'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function avances()
    {
        return $this->hasMany('App\Models\Avance', 'contribuyente_id', 'id');
    }
    

}
