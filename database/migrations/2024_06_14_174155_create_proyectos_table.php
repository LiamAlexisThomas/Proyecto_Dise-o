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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('diseñador_id');
            $table->boolean('confirmacion');
            $table->date('fechaProy');
            $table->string('lugar', 40);
            $table->timestamps();

            $table->foreign('material_id')->references('id')->on('materials');
            $table->foreign('diseñador_id')->references('id')->on('diseñadors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
};
