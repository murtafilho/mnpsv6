<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Artigo
 * @package App\Models
 * @version July 26, 2017, 2:06 am UTC
 */
class Artigo extends Model
{
    use SoftDeletes;

    public $table = 'artigos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'descricao',
        'lei',
        'decreto',
        'classificacao',
        'multa',
        'detalhamento',
        'diurno',
        'vespertino',
        'noturno1',
        'noturno2',
        'sex_sab_fer',
        'sistemas',
        'passeios',
        'automotor',
        'frequentadores',
        'dentro_dos_limites',
        'escolas',
        'tonais',
        'faixa',
        'construcao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'descricao' => 'string',
        'lei' => 'string',
        'decreto' => 'string',
        'classificacao' => 'string',
        'multa' => 'string',
        'detalhamento' => 'string',
        'diurno' => 'boolean',
        'vespertino' => 'boolean',
        'noturno1' => 'boolean',
        'noturno2' => 'boolean',
        'sex_sab_fer' => 'boolean',
        'sistemas' => 'boolean',
        'passeios' => 'boolean',
        'automotor' => 'boolean',
        'frequentadores' => 'boolean',
        'dentro_dos_limites' => 'boolean',
        'escolas' => 'boolean',
        'tonais' => 'boolean',
        'faixa' => 'boolean',
        'construcao' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
