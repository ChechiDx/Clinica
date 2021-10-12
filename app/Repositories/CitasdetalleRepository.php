<?php

namespace App\Repositories;

use App\Models\Citasdetalle;
use App\Repositories\BaseRepository;

/**
 * Class CitasdetalleRepository
 * @package App\Repositories
 * @version October 6, 2021, 1:18 am UTC
*/

class CitasdetalleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_detallecita',
        'id_cita'
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
        return Citasdetalle::class;
    }
}
