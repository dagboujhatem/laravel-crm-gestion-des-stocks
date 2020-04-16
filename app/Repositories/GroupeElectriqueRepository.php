<?php

namespace App\Repositories;

use App\GroupeElectrique;
use App\Repositories\BaseRepository;

/**
 * Class GroupeElectriqueRepository
 * @package App\Repositories
 * @version April 16, 2020, 8:20 pm UTC
*/

class GroupeElectriqueRepository extends BaseRepository
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
        return GroupeElectrique::class;
    }
}
