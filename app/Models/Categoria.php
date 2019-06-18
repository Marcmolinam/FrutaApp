<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categoria
 * @package App\Models
 * @version June 16, 2019, 8:25 pm UTC
 *
 * @property srting nombre
 * @property string descripcion
 */
class Categoria extends Model
{
    use SoftDeletes;

    public $table = 'categorias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];
    public function productos(){
        return $this->hasMany(Producto::class);

    }
    
}
