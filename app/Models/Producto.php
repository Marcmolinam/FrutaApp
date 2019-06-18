<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 * @package App\Models
 * @version June 18, 2019, 1:02 am UTC
 *
 * @property string nombre
 * @property string descripcion
 * @property string precio
 * @property string imgProducto
 * @property string id_categoria
 */
class Producto extends Model
{
    use SoftDeletes;

    public $table = 'productos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'imgProducto',
        'categoria_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' => 'string',
        'precio' => 'string',
        'imgProducto' => 'string',
        'categoria_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'precio' => 'required',
        'imgProducto' => 'required',
        'categoria_id' => 'required'
    ];
    public function categorias(){
        return $this->belongsTo(Categoria::class);

    }
    
    
}
