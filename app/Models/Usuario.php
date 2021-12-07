<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id
 * @property $idRol
 * @property $nombreUsuario
 * @property $apellidoUsuario
 * @property $claveUsuario
 * @property $tipoDocUsuario
 * @property $numeroDocUsuario
 * @property $telcelularUsuario
 * @property $correoUsuario
 * @property $estadoUsuario
 * @property $idObra
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{

    static $rules = [
		'idRol' => 'required',
		'nombreUsuario' => 'required',
		'apellidoUsuario' => 'required',
		'claveUsuario' => 'required',
		'tipoDocUsuario' => 'required',
		'numeroDocUsuario' => 'required',
		'telcelularUsuario' => 'required',
		'correoUsuario' => 'required',
		'estadoUsuario' => 'required',
		'idObra' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idRol','nombreUsuario','apellidoUsuario','claveUsuario','tipoDocUsuario ','numeroDocUsuario ','telcelularUsuario ','correoUsuario ','estadoUsuario','idObra'];



}
