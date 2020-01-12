<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenustocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menustocks', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('menu_id');
            $table->unsignedBigInteger('tienda_id');
            $table->index(['menu_id', 'tienda_id']);
            
            $table->integer('cantidad');
            $table->dateTime('fecha', 0);
            
            $table->foreign('menu_id')
                ->references('id')->on('menus')
                ->onDelete('cascade');
            
            $table->foreign('tienda_id')
                ->references('id')
                ->on('tiendas')
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
        Schema::dropIfExists('menustocks');
    }
}
