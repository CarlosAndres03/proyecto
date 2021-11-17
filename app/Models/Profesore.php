<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profesore
 *
 * @property $idProfesor
 * @property $nombres
 * @property $apellidoPaterno
 * @property $apellidoMaterno
 * @property $idArteMarcial
 * @property $idAlumno
 * @property $idSeminario
 * @property $idExamen
 * @property $idServicio
 * @property $idPago
 * @property $idEscuela
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno $alumno
 * @property Artesmarciale $artesmarciale
 * @property Escuela $escuela
 * @property Examene $examene
 * @property Pago $pago
 * @property Seminario $seminario
 * @property Servicio $servicio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Profesore extends Model
{
    
    static $rules = [
		'idProfesor' => 'required',
		'nombres' => 'required',
		'apellidoPaterno' => 'required',
		'apellidoMaterno' => 'required',
		'idArteMarcial' => 'required',
		'idAlumno' => 'required',
		'idSeminario' => 'required',
		'idExamen' => 'required',
		'idServicio' => 'required',
		'idPago' => 'required',
		'idEscuela' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idProfesor','nombres','apellidoPaterno','apellidoMaterno','idArteMarcial','idAlumno','idSeminario','idExamen','idServicio','idPago','idEscuela'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function alumno()
    {
        return $this->hasOne('App\Models\Alumno', 'idAlumno', 'idAlumno');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function artesmarciale()
    {
        return $this->hasOne('App\Models\Artesmarciale', 'idArteMarcial', 'idArteMarcial');
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
    public function examene()
    {
        return $this->hasOne('App\Models\Examene', 'idExamen', 'idExamen');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pago()
    {
        return $this->hasOne('App\Models\Pago', 'idPago', 'idPago');
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
    public function servicio()
    {
        return $this->hasOne('App\Models\Servicio', 'idServicio', 'idServicio');
    }
    

}
