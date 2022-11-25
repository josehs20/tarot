<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtendentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendentes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->dateTime('criado');
            $table->boolean('conectado')->default(false);
            $table->string('situacao');
            $table->string('status');
            $table->decimal('comissao', 8, 2)->default(0.00);
            $table->unsignedBigInteger('user_id');
            $table->string('descricao');
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
        Schema::table('atendentes', function (Blueprint $table) {
            $table->dropForeign('atendentes_user_id_foreign');
            $table->dropColumn('user_id');
        });
        Schema::dropIfExists('atendentes');
    }
}
