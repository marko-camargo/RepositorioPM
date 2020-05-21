<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->bigIncrements('id_cuenta');
            $table->string("Nombre_cliente");
            $table->float("Saldo");
            $table->float("Abonos");
            $table->float("Intereses");
            $table->float("Recargos");
            $table->float("CantPrestamo");
            $table->integer("Plazo_meses");
            $table->date("FechaSolicitud");
            $table->text("Comentarios");
            $table->string("Status");
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
        Schema::dropIfExists('cuentas');
    }
}
