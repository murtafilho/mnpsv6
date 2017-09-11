<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pessoa
 * @package App\Models
 * @version July 25, 2017, 10:39 pm UTC
 */
class Pessoa extends Model
{


    public $table = 'pessoas';

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'cnpj_cpf',
        'endereco_id',
        'numero',
        'complemento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'cnpj_cpf' => 'string',
        'endereco_id' => 'integer',
        'numero' => 'integer',
        'complemento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function endereco()
    {
        return $this->belongsTo(\App\Models\Endereco::class);
    }

    public function getLogradBairroAttribute()
    {
        return $this->endereco->logradouro.' - '.$this->endereco->bairro;
    }

}
