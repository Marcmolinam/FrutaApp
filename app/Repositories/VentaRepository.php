<?php

namespace App\Repositories;

use App\Models\Venta;
use App\Repositories\BaseRepository;

/**
 * Class VentaRepository
 * @package App\Repositories
 * @version June 18, 2019, 6:43 pm UTC
*/

class VentaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subtotal',
        'iva',
        'descuento',
        'total',
        'cliente_id',
        'usuario_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Venta::class;
    }
}
