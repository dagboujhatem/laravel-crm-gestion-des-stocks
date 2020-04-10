<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Jumelle
 * @package App
 * @version April 10, 2020, 7:12 pm UTC
 *
 * @property string zone
 * @property string brigade
 * @property string poste
 * @property string type
 * @property string numero
 * @property string date-d-affectation
 * @property string etat
 * @property string remarque
 */
class Jumelle extends Model
{
    use SoftDeletes;

    public $table = 'jumelles';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
        'remarque' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
