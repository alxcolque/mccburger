<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsumostocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumostocks', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('ins_id');
            $table->unsignedBigInteger('tienda_id');
            $table->index(['ins_id', 'tienda_id']);
            $table->integer('cantidad');
            $table->dateTime('fecha', 0);
            
            $table->foreign('ins_id')
                ->references('id')->on('insumos')
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
        Schema::dropIfExists('insumostocks');
    }
}
