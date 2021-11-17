<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Seminario
 *
 * @property $idSeminario
 * @property $fechaSeminario
 * @property $precioSeminario
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Direccione[] $direcciones
 * @property Profesore[] $profesores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Seminario extends Model
{
    
    static $rules = [
		'idSeminario' => 'required',
		'fechaSeminario' => 'required',
		'precioSeminario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idSeminario','fechaSeminario','precioSeminario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos()
    {
        return $this->hasMany('App\Models\Alumno', 'idSeminario', 'idSeminario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function direcciones()
    {
        return $this->hasMany('App\Models\Direccione', 'idSeminario', 'idSeminario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesores()
    {
        return $this->hasMany('App\Models\Profesore', 'idSeminario', 'idSeminario');
    }
    

}
