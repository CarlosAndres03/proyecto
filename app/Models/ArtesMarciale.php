<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ArtesMarciale
 *
 * @property $idArteMarcial
 * @property $tipoDiciplina
 * @property $fechaInscripcion
 * @property $fechaDesercion
 * @property $fechaReincorporacion
 * @property $idEquipo
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno[] $alumnos
 * @property Equipo $equipo
 * @property Profesore[] $profesores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ArtesMarciale extends Model
{
    
    static $rules = [
		'idArteMarcial' => 'required',
		'tipoDiciplina' => 'required',
		'fechaInscripcion' => 'required',
		'fechaDesercion' => 'required',
		'fechaReincorporacion' => 'required',
		'idEquipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idArteMarcial','tipoDiciplina','fechaInscripcion','fechaDesercion','fechaReincorporacion','idEquipo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function alumnos()
    {
        return $this->hasMany('App\Models\Alumno', 'idArteMarcial', 'idArteMarcial');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'idEquipo', 'idEquipo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesores()
    {
        return $this->hasMany('App\Models\Profesore', 'idArteMarcial', 'idArteMarcial');
    }
    

}
