<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cnpj_cpf');
            $table->integer('endereco_id')->unsigned();
            $table->integer('numero');
            $table->string('complemento')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('pessoas', function($table) {
            $table->foreign('endereco_id')->references('id')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pessoas');
    }
}
