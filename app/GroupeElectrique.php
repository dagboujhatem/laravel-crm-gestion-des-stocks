<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GroupeElectrique
 * @package App
 * @version April 16, 2020, 8:20 pm UTC
 *
 * @property string zone
 * @property string brigade
 * @property string poste
 * @property string type
 * @property string numero
 * @property string remarque
 */
class GroupeElectrique extends Model
{
    use SoftDeletes;

    public $table = 'groupe_electriques';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'zone',
        'brigade',
        'poste',
        'type',
        'numero',
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
