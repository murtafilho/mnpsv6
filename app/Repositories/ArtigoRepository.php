<?php

namespace App\Repositories;

use App\Models\Artigo;
use InfyOm\Generator\Common\BaseRepository;

class ArtigoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Artigo::class;
    }
}
