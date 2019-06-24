<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Detalle_Venta
 * @package App\Models
 * @version June 18, 2019, 6:53 pm UTC
 *
 * @property string porducto_id
 * @property string venta_id
 * @property string precio
 * @property string cantidad
 * @property string importe
 */
class Detalle_Venta extends Model
{
    use SoftDeletes;

    public $table = 'detalle__ventas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'porducto_id',
        'venta_id',
        'precio',
        'cantidad',
        'importe'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'porducto_id' => 'string',
        'venta_id' => 'string',
        'precio' => 'string',
        'cantidad' => 'string',
        'importe' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'porducto_id' => 'required',
        'venta_id' => 'required',
        'precio' => 'required',
        'cantidad' => 'required',
        'importe' => 'required'
    ];

    
}
