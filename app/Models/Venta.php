<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Venta
 * @package App\Models
 * @version June 18, 2019, 6:43 pm UTC
 *
 * @property int subtotal
 * @property int iva
 * @property string descuento
 * @property int total
 * @property string cliente_id
 * @property string usuario_id
 */
class Venta extends Model
{
    use SoftDeletes;

    public $table = 'ventas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'subtotal',
        'iva',
        'descuento',
        'total',
        'cliente_id',
        'usuario_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descuento' => 'string',
        'cliente_id' => 'string',
        'usuario_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'subtotal' => 'required',
        'total' => 'required',
        'cliente_id' => 'required',
        'usuario_id' => 'required'
    ];

    
}
