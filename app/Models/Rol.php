<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Rol
 * @package App\Models
 * @version June 18, 2019, 6:28 pm UTC
 *
 * @property string nombre
 */
class Rol extends Model
{
    use SoftDeletes;

    public $table = 'rols';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];

    public function users(){
        return $this->hasMany(User::class);

    }
        public function clientes(){
        return $this->hasMany(Cliente::class);

    }
}
