<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Arme
 * @package App
 * @version April 15, 2020, 7:47 pm UTC
 *
 * @property string zone
 * @property string brigade
 * @property string poste
 * @property string type
 * @property string numero
 * @property string remarque
 */
class Arme extends Model
{
    use SoftDeletes;

    public $table = 'armes';
    

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
