<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('menu',50);
            $table->double('precio', 8, 2);
            $table->string('foto',50);
            
            $table->unsignedBigInteger('ingrediente_id');
            $table->foreign('ingrediente_id')
                ->references('id')->on('ingredientes')
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
        Schema::dropIfExists('menus');
    }
}
