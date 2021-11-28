<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id')->constrained();
            $table->foreignId('categoria_id')->constrained();
            $table->foreignId('comunidad_id')->constrained();
            $table->string('ruc_socio', 50)->nullable();
            $table->string('ubigeo_socio', 30)->nullable();
            $table->string('latitud_socio', 20)->nullable();
            $table->string('longitud_socio', 20)->nullable();
            $table->string('ocupacion_socio', 20);
            $table->string('ginstruccion_socio', 20);
            $table->char('es_socio', 1);
            $table->string('im_socio', 200)->nullable();
            $table->string('up_socio', 200)->nullable();
            $table->string('conyugue_socio', 100)->nullable();
            $table->string('conyugue_dni_socio', 8)->nullable();
            $table->string('hijo_socio', 100)->nullable();
            $table->string('hijo_dni_socio', 8)->nullable();
            $table->string('hijo_fn_socio', 100)->nullable();
            $table->string('hijo_ginstruccion_socio', 8)->nullable();
            $table->string('observaciones_socio', 8)->nullable();

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
        Schema::dropIfExists('socios');
    }
}
