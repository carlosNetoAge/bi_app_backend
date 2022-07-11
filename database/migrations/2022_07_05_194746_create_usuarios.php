<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 55);
            $table->string('sobrenome', 255);
            $table->string('email', 255);
            $table->unsignedBigInteger('setor_id');
            $table->tinyInteger('privilegio')->default(0);
            $table->string('personal_token', 1000)->nullable();
            $table->timestamps();
            $table->softDeletes();


            // Relacionamento
            $table->foreign('setor_id')->references('id')->on('setores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
