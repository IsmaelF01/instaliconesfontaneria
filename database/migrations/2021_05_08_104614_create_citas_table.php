<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion')->nullable();
            $table->string('estado');
            $table->string('fecha')->nullable();
            $table->string('hora')->nullable();
            $table->string('direccion');
            $table->string('ciudad');
            $table->bigInteger("user_id")->unsigned()->nullable();
            $table->foreign("user_id")->references("id")->on("users")->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger("fontaneria_id")->unsigned()->nullable();
            $table->foreign("fontaneria_id")->references("id")->on("fontanerias")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('citas');
    }
}
