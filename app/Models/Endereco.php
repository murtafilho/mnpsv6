<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Endereco
 * @package App\Models
 * @version July 26, 2017, 12:34 am UTC
 */
class Endereco extends Model
{
    use SoftDeletes;

    public $table = 'enderecos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'logradouro',
        'bairro',
        'regional'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'logradouro' => 'string',
        'bairro' => 'string',
        'regional' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pessoas()
    {
        return $this->hasMany(\App\Models\Pessoa::class);
    }
}
