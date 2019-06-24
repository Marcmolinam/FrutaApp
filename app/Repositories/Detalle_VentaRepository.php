<?php

namespace App\Repositories;

use App\Models\Detalle_Venta;
use App\Repositories\BaseRepository;

/**
 * Class Detalle_VentaRepository
 * @package App\Repositories
 * @version June 18, 2019, 6:53 pm UTC
*/

class Detalle_VentaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'porducto_id',
        'venta_id',
        'precio',
        'cantidad',
        'importe'
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
        return Detalle_Venta::class;
    }
}
