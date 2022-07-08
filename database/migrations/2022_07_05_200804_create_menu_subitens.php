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
        Schema::create('menu_subitens', function (Blueprint $table) {
            $table->id();
            $table->string('subitem', 255);
            $table->string('iframe', 1000);
            $table->unsignedBigInteger('item_id');
            $table->timestamps();
            $table->softDeletes();

            // Relacionamentos

            $table->foreign('item_id')->references('id')->on('menu_itens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_subitens');
    }
};
