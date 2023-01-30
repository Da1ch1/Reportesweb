<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $cliente_id
 * @property $Fecha
 * @property $contacto_id
 * @property $actividad_id
 * @property $Procesoactividad
 * @property $Atendio
 * @property $costo_id
 * @property $Nfactura
 * @property $Poliza
 * @property $Horario
 * @property $Sistemas
 * @property $Soporte
 * @property $Contabilidad
 * @property $Programacion
 * @property $Diseño
 * @property $MKT
 * @property $Nom
 * @property $Equipos
 * @property $Antivirus
 * @property $Cursos
 * @property $created_at
 * @property $updated_at
 *
 * @property Actividade $actividade
 * @property Cliente $cliente
 * @property Contacto $contacto
 * @property Costo $costo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'cliente_id' => 'required',
		'Fecha' => 'required',
		'contacto_id' => 'required',
		'actividad_id' => 'required',
		'Procesoactividad' => 'required',
        'Vendedor' => 'required',
		'Atendio' => 'required',
		'costo_id' => 'required',
		'Nfactura' => 'nullable',
		'Poliza' => 'nullable',
		'Horario' => 'required',
		'Sistemas' => 'nullable',
		'Soporte' => 'nullable',
		'Contabilidad' => 'nullable',
		'Programacion' => 'nullable',
		'Diseño' => 'nullable',
		'MKT' => 'nullable',
		'Nom' => 'nullable',
		'Equipos' => 'nullable',
		'Antivirus' => 'nullable',
		'Cursos' => 'nullable',
    ];

    protected $perPage = 20;
    
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente_id','Fecha','contacto_id','actividad_id','Procesoactividad','Vendedor','Atendio','costo_id','Nfactura','Poliza','Horario','Sistemas','Soporte','Contabilidad','Programacion','Diseño','MKT','Nom','Equipos','Antivirus','Cursos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function actividade()
    {
        return $this->hasOne('App\Models\Actividade', 'id', 'actividad_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contacto()
    {
        return $this->hasOne('App\Models\Contacto', 'id', 'contacto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function costo()
    {
        return $this->hasOne('App\Models\Costo', 'id', 'costo_id');
    }
    

}
