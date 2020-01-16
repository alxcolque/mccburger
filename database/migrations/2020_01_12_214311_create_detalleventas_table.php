<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('venta_id');
            $table->unsignedBigInteger('menu_id');
            $table->index(['venta_id', 'menu_id']);
            $table->integer('cantidad');
            $table->dateTime('fecha', 0);
            $table->string('estado', 9)->nullable();
            $table->timestamps();
            
            $table->foreign('venta_id')
                ->references('id')->on('ventas')
                ->onDelete('cascade');
            $table->foreign('menu_id')
                ->references('id')
                ->on('menus')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalleventas');
    }
}
