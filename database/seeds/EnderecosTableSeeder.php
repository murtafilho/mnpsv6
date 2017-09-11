<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnderecosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rows = DB::table('enderecos_copy')->get();

        foreach ($rows as $row){
            DB::table('enderecos')->insert([
                'logradouro' => $row->logradouro,
                'bairro' => $row->bairro,
                'regional' => $row->regional,
            ]);
        }
    }
}
