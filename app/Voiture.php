<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Voiture
 * @package App
 * @version April 7, 2020, 6:31 pm UTC
 *
 * @property string zone
 * @property string brigade
 * @property string poste
 * @property string type
 * @property string numero
 * @property string date-d-affectation
 * @property string etat
 * @property sting date-de-panne
 * @property string place-de-reparation
 * @property sting remarque
 */
class Voiture extends Model
{
    use SoftDeletes;

    public $table = 'voitures';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'zone' => 'string',
        'brigade' => 'string',
        'poste' => 'string',
        'type' => 'string',
        'numero' => 'string',
        'date-d-affectation' => 'string',
        'etat' => 'string',
        'place-de-reparation' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
