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
        Schema::create('diseñadors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre' , 80);
            $table->string('email' , 80);
            $table->string('telefono' , 80);
            $table->date('fechaNac');
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
        Schema::dropIfExists('diseñadors');
    }
};
