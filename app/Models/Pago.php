<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 *
 * @property $idPago
 * @property $fechaPago
 * @property $montoDado
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Profesore[] $profesores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    static $rules = [
		'idPago' => 'required',
		'fechaPago' => 'required',
		'montoDado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idPago','fechaPago','montoDado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos()
    {
        return $this->hasMany('App\Models\Alumno', 'idPago', 'idPago');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesores()
    {
        return $this->hasMany('App\Models\Profesore', 'idPago', 'idPago');
    }
    

}
