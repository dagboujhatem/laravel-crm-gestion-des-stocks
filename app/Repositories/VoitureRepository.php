<?php

namespace App\Repositories;

use App\Voiture;
use App\Repositories\BaseRepository;

/**
 * Class VoitureRepository
 * @package App\Repositories
 * @version April 7, 2020, 6:31 pm UTC
*/

class VoitureRepository extends BaseRepository
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
        'date-de-panne',
        'place-de-reparation',
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
        return Voiture::class;
    }
}
