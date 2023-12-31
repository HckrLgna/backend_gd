<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlCalidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_calidad', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_control');
            $table->integer('calificacion');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('producto')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('control_calidad');
    }
}
