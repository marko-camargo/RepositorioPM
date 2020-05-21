<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariossistemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuariossistema', function (Blueprint $table) {
            $table->bigIncrements('id_usuario');
            $table->string("Nombre");
            $table->integer("id_sucursal");
            $table->string("Domicilio");
            $table->string("Telefono");
            $table->string("Puesto");
            $table->integer("Status");
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
        Schema::dropIfExists('usuariossistema');
    }
}
