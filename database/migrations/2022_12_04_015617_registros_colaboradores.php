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
        Schema::create('registros_colaboradores', function(Blueprint $table){
            $table->id();
            $table->string('codigo_colaborador');
            $table->timeStamps();

            $table->foreign('codigo_colaborador')
                ->references('codigo')
                ->on('colaboradores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros_colaboradores');
    }
};
