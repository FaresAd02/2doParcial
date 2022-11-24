<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $nombres
 * @property $apellidos
 * @property $fecha_nacimiento
 * @property $id_carrera
 * @property $sexo
 * @property $estado_civil
 * @property $status
 * @property $id_campus
 * @property $id_pais
 * @property $fecha_ingreso
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'nombres' => 'required',
		'apellidos' => 'required',
		'fecha_nacimiento' => 'required',
		'id_carrera' => 'required',
		'sexo' => 'required',
		'estado_civil' => 'required',
		'status' => 'required',
		'id_campus' => 'required',
		'id_pais' => 'required',
		'fecha_ingreso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres','apellidos','fecha_nacimiento','id_carrera','sexo','estado_civil','status','id_campus','id_pais','fecha_ingreso'];



}
