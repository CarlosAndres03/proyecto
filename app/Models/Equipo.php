<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 *
 * @property $idEquipo
 * @property $nombreEquipo
 * @property $cantidad
 * @property $precio
 * @property $cantidadExistencia
 * @property $color
 * @property $created_at
 * @property $updated_at
 *
 * @property Artesmarciale[] $artesmarciales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
    
    static $rules = [
		'idEquipo' => 'required',
		'nombreEquipo' => 'required',
		'cantidad' => 'required',
		'precio' => 'required',
		'cantidadExistencia' => 'required',
		'color' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEquipo','nombreEquipo','cantidad','precio','cantidadExistencia','color'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function artesmarciales()
    {
        return $this->hasMany('App\Models\Artesmarciale', 'idEquipo', 'idEquipo');
    }
    

}
