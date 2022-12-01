<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sexo');
            $table->string('telefone');
            $table->date('nascimento');
            $table->dateTime('criado');
            $table->boolean('conectado')->default(false);
            $table->string('status');
            $table->decimal('tempo', 8, 2)->default(0.00);
            $table->decimal('tempo_conversa', 8, 2)->default(0.00);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropForeign('clientes_user_id_foreign');
            $table->dropColumn('user_id');
        });
        
        Schema::dropIfExists('clientes');
    }
}
