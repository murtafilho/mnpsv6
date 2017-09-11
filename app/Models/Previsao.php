<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Previsao
 * @package App\Models
 * @version July 26, 2017, 1:48 am UTC
 */
class Previsao extends Model
{
    use SoftDeletes;

    public $table = 'previsoes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'logradouro_id',
        'logradouro',
        'bairro_id',
        'bairro',
        'regional_id',
        'regional',
        'numero',
        'leste',
        'norte',
        'DIURNO',
        'VESPERTINO',
        'NOTURNO1',
        'NOTURNO2'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'logradouro_id' => 'integer',
        'logradouro' => 'string',
        'bairro_id' => 'integer',
        'bairro' => 'string',
        'regional_id' => 'integer',
        'regional' => 'string',
        'numero' => 'integer',
        'leste' => 'string',
        'norte' => 'string',
        'DIURNO' => 'float',
        'VESPERTINO' => 'float',
        'NOTURNO1' => 'float',
        'NOTURNO2' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
