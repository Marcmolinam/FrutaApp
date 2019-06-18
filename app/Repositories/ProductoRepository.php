<?php

namespace App\Repositories;

use App\Models\Producto;
use App\Repositories\BaseRepository;

/**
 * Class ProductoRepository
 * @package App\Repositories
 * @version June 18, 2019, 12:51 am UTC
*/

class ProductoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'descripcion',
        'imgProducto',
        'precio',
        'categoria_id'
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
        return Producto::class;
    }
}
