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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
              //se crea el campo del usuario 
            
            $table->string('descripcion');
            $table->string('tipo');
            $table->integer('monto');
            $table->date('fecha');
            $table->string('categoria');
            $table->string('comentario');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
              //se crea la relacion con la tabla users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
};
  