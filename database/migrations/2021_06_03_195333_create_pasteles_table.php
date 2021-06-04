<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasteles', function (Blueprint $table) {
            $table->string('ID')->nullable();
            $table->string('Cobertura')->nullable();
            $table->string('Descripción')->nullable();
            $table->double('PrecioPorción10')->nullable();
            $table->double('PrecioTotal10')->nullable();
            $table->double('PrecioPorción15')->nullable();
            $table->double('PrecioTotal15')->nullable();
            $table->double('PrecioPorción20')->nullable();
            $table->double('PrecioTotal20')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasteles');
    }
}
