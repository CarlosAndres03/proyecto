<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Direccione
 *
 * @property $idDireccion
 * @property $nombreEstado
 * @property $municipio
 * @property $colonia
 * @property $calle
 * @property $cp
 * @property $numeroExterior
 * @property $idSeminario
 * @property $idTorneo
 * @property $idEscuela
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Escuela $escuela
 * @property Seminario $seminario
 * @property Torneo $torneo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Direccione extends Model
{
    
    static $rules = [
		'idDireccion' => 'required',
		'nombreEstado' => 'required',
		'municipio' => 'required',
		'colonia' => 'required',
		'calle' => 'required',
		'cp' => 'required',
		'numeroExterior' => 'required',
		'idSeminario' => 'required',
		'idTorneo' => 'required',
		'idEscuela' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idDireccion','nombreEstado','municipio','colonia','calle','cp','numeroExterior','idSeminario','idTorneo','idEscuela'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos()
    {
        return $this->hasMany('App\Models\Alumno', 'idDireccion', 'idDireccion');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function escuela()
    {
        return $this->hasOne('App\Models\Escuela', 'idEscuela', 'idEscuela');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function seminario()
    {
        return $this->hasOne('App\Models\Seminario', 'idSeminario', 'idSeminario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function torneo()
    {
        return $this->hasOne('App\Models\Torneo', 'idTorneo', 'idTorneo');
    }
    

}
