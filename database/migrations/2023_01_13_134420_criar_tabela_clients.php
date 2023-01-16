<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('idclient');
            $table->string('name', 80);
            $table->string('email', 80);
            $table->integer('cpf');
            $table->integer('celular');
            $table->integer('cep');
            $table->string('endereco', 80);
            $table->string('numero', 10);
            $table->string('bairro', 80);
            $table->string('complemento', 80);
            $table->string('cidade', 80);
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
