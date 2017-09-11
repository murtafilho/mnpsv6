<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicao extends Model
{
    protected $table = 'medicoes';
    protected $fillable = [
        'tipo_exp',
        'num_exp',
        'localFiscalizado',
        'enderecoReclamado',
        'numeroReclamado',
        'localMedicao',
        'numeroMedicao',
        'complementoMedicao',
        'enderecoMedicao',
        'decibelimetro',
        'posicionamento',
        'dataMedicao',
        'inicio',
        'fim',
        'distancia',
        'tabelaFonte',
        'tabelaFundo',
        'valoresFonte',
        'valoresFundo',
        'leqFonte',
        'leqFundo',
        'atribuicaoFonte',
        'depreciacao',
        'distancia',
        'ruido',
        'periodo',
        'limite',
        'escolaHospital',
        'sexSabFer',
        'alterLocal',
        'sistemas',
        'relatorio',
        'resultado',
        'acimaDe10',
        'artigos',
        'local',
        'lat',
        'long',
        'construcao',
        'usuario',
        'usuario_id'
    ];
}
