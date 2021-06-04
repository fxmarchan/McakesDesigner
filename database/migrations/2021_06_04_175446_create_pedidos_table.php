<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('ID')->startingValue("1");
            $table->date('FECHAEMISION')->nullable();
            $table->date('FECHAENTREGA')->nullable();
            $table->string('NOMBRECLI')->nullable();
            $table->string('VENDEDOR')->nullable();
            $table->string('DESCRIPCION')->nullable();
            $table->string('COBERTURA')->nullable();
            $table->string('DESCRIPASTEL')->nullable();
            $table->double('CANTIDADPORPAS')->nullable();
            $table->double('PRECIOPORCION')->nullable();
            $table->double('PRECIOTOTAL')->nullable();
            $table->string('DESCRIRELLENO')->nullable();
            $table->double('CANTPORCRELLE')->nullable();
            $table->double('PRECIORELLENO')->nullable();
            $table->string('DESCRIFRUTA')->nullable();
            $table->double('GRAMOS')->nullable();
            $table->double('PRECIOFRUTA')->nullable();
            $table->string('TIPOINSUMO')->nullable();
            $table->string('INSUMO')->nullable();
            $table->double('CANTINSUMO')->nullable();
            $table->double('PRECIOINSUMO')->nullable();
            $table->double('PRECIOUNINSUMO')->nullable();
            $table->double('PRECIOPRODUCCION')->nullable();
            $table->double('PORGANANCIA')->nullable();
            $table->double('GANANCIA')->nullable();
            $table->double('PRECIOFINAL')->nullable();
            $table->double('PORCESETENTACINCO')->nullable();
            $table->double('PORCEVEINTECINCO')->nullable();
            $table->date('updated_at')->nullable();
            $table->date('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
