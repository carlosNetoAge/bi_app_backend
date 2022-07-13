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
        Schema::create('menu_subitens_permissoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('subitem_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('item_id')->references('id')->on('menu_itens');
            $table->foreign('subitem_id')->references('id')->on('menu_subitens');
            $table->foreign('user_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_subitens_permissoes');
    }
};
