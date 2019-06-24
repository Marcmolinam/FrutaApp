<?php

namespace App\Repositories;

use App\Models\Rol;
use App\Repositories\BaseRepository;

/**
 * Class RolRepository
 * @package App\Repositories
 * @version June 18, 2019, 6:28 pm UTC
*/

class RolRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
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
        return Rol::class;
    }
}
