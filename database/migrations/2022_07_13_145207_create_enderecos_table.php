<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('cliente_id');
            $table->string('rua',50);
            $table->integer('numero');
            $table->string('bairro',50);
            $table->string('cidade',50);
            $table->string('uf',2);
            $table->string('ponto_referencia',50);

            $table->foreign('cliente_id')->references('cliente_id')->on('clientes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('enderecos_id_cliente_foreign');
        $table->dropColumn('id_clientes');
        Schema::dropIfExists('enderecos');
    }
}
