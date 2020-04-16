<?php

namespace App\Repositories;

use App\Camera;
use App\Repositories\BaseRepository;

/**
 * Class CameraRepository
 * @package App\Repositories
 * @version April 10, 2020, 8:57 pm UTC
*/

class CameraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'zone',
        'brigade',
        'poste',
        'type',
        'numero',
        'date-d-affectation',
        'etat'
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
        return Camera::class;
    }
}
