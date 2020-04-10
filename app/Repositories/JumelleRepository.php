<?php

namespace App\Repositories;

use App\Jumelle;
use App\Repositories\BaseRepository;

/**
 * Class JumelleRepository
 * @package App\Repositories
 * @version April 10, 2020, 7:12 pm UTC
*/

class JumelleRepository extends BaseRepository
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
        'etat',
        'remarque'
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
        return Jumelle::class;
    }
}
