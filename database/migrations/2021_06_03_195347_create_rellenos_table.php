<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRellenosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rellenos', function (Blueprint $table) {
            $table->string('ID')->nullable();
            $table->string('Descripción')->nullable();
            $table->double('PrecioPorción10')->nullable();
            $table->double('PrecioPorción15')->nullable();
            $table->double('PrecioPorción20')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rellenos');
    }
}
