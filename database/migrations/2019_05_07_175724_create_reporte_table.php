<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('formato_pago');
            $table->date('fecha');
            $table->string('estado');
        });

        Schema::create('licor_reporte', function (Blueprint $table){
            $table->bigInteger('licor_id')->unsigned();
            $table->bigInteger('reporte_id')->unsigned();
            $table->integer('cantidad');

            $table->foreign('reporte_id')
                ->references('id')
                ->on('reportes')
                ->onDelete('cascade');

            $table->foreign('licor_id')
                ->references('id')
                ->on('licores');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_reporte');
        Schema::dropIfExists('reporte');
     
    }
}
