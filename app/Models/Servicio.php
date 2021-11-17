<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 *
 * @property $idServicio
 * @property $fecha
 * @property $horasRealizadas
 * @property $actividadHecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Profesore[] $profesores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Servicio extends Model
{
    
    static $rules = [
		'idServicio' => 'required',
		'fecha' => 'required',
		'horasRealizadas' => 'required',
		'actividadHecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idServicio','fecha','horasRealizadas','actividadHecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos()
    {
        return $this->hasMany('App\Models\Alumno', 'idServicio', 'idServicio');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesores()
    {
        return $this->hasMany('App\Models\Profesore', 'idServicio', 'idServicio');
    }
    

}
