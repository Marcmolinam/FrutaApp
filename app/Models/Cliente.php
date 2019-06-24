<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 * @package App\Models
 * @version June 18, 2019, 6:22 pm UTC
 *
 * @property string nombre
 * @property string apellidos
 * @property string telefono
 * @property string direccion
 * @property string rut
 * @property string empresa
 * @property string id_rol
 */
class Cliente extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellidos',
        'telefono',
        'direccion',
        'rut',
        'empresa',
        'id_rol'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'apellidos' => 'string',
        'telefono' => 'string',
        'direccion' => 'string',
        'rut' => 'string',
        'empresa' => 'string',
        'id_rol' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellidos' => 'required',
        'telefono' => 'required',
        'direccion' => 'required',
        'rut' => 'required',
        'id_rol' => 'required'
    ];

    public function rols(){
        return $this->belongsTo(Rol::class);

    }
}
