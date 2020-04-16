<?php

namespace App\Repositories;

use App\Arme;
use App\Repositories\BaseRepository;

/**
 * Class ArmeRepository
 * @package App\Repositories
 * @version April 15, 2020, 7:47 pm UTC
*/

class ArmeRepository extends BaseRepository
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
        return Arme::class;
    }
}
