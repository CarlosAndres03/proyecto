<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Escuela
 *
 * @property $idEscuela
 * @property $nombreEscuela
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Direccione[] $direcciones
 * @property Profesore[] $profesores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Escuela extends Model
{
    
    static $rules = [
		'idEscuela' => 'required',
		'nombreEscuela' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEscuela','nombreEscuela'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos()
    {
        return $this->hasMany('App\Models\Alumno', 'idEscuela', 'idEscuela');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function direcciones()
    {
        return $this->hasMany('App\Models\Direccione', 'idEscuela', 'idEscuela');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesores()
    {
        return $this->hasMany('App\Models\Profesore', 'idEscuela', 'idEscuela');
    }
    

}
