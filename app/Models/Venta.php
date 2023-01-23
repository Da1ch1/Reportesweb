<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $cliente_id
 * @property $Dia
 * @property $Contacto
 * @property $Actividad
 * @property $Procesoactividad
 * @property $Atendio
 * @property $Sincosto
 * @property $Nfactura
 * @property $Poliza
 * @property $Horario
 * @property $Sistemas
 * @property $Soporte
 * @property $Sistema2
 * @property $Soporte2
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
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    static $rules = [
		'cliente_id' => 'required',
		'Dia' => 'required',
		'Contacto' => 'required',
		'Actividad' => 'required',
		'Procesoactividad' => 'required',
		'Atendio' => 'required',
		'Sincosto' => 'required',
		'Nfactura' => 'required',
		'Poliza' => 'required',
		'Horario' => 'required',
		'Sistemas' => 'required',
		'Soporte' => 'required',
		'Sistema2' => 'required',
		'Soporte2' => 'required',
		'Contabilidad' => 'required',
		'Programacion' => 'required',
		'Diseño' => 'required',
		'MKT' => 'required',
		'Nom' => 'required',
		'Equipos' => 'required',
		'Antivirus' => 'required',
		'Cursos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cliente_id','Dia','Contacto','Actividad','Procesoactividad','Atendio','Sincosto','Nfactura','Poliza','Horario','Sistemas','Soporte','Sistema2','Soporte2','Contabilidad','Programacion','Diseño','MKT','Nom','Equipos','Antivirus','Cursos'];

 /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'cliente_id');
    }

}
