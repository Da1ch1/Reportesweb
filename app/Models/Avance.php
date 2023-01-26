<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Avance
 *
 * @property $id
 * @property $contribuyente_id
 * @property $mes
 * @property $estatus
 * @property $fecha
 * @property $pendientes
 * @property $created_at
 * @property $updated_at
 *
 * @property Contribuyente $contribuyente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Avance extends Model
{
    
    static $rules = [
		'contribuyente_id' => 'required',
		'mes' => 'required',
		'estatus' => 'required',
		'fecha' => 'required',
		'pendientes' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['contribuyente_id','mes','estatus','fecha','pendientes'];
    public const ESTATUS = ['Terminado', 'Pendiente'];
    public const MES = ['Enero', 'Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
    public function estatus()
    {
        return self::ESTATUS[$this->estatus];
    }
    public function mes()
    {
        return self::MES[$this->mes];
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contribuyente()
    {
        return $this->hasOne('App\Models\Contribuyente', 'id', 'contribuyente_id');
    }
    

}
