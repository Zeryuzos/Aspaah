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
            $table->foreignId('categoria_id')->constrained()->references('id')->on('categorias')->onDelete('cascade')->change();
            $table->string('no_socio', 60);
            $table->string('ap_socio', 45);
            $table->string('am_socio', 45);
            $table->string('dni_socio', 8)->unique();
            $table->string('em_socio', 255)->unique();
            $table->string('nu_celular_socio', 20)->nullable();
            $table->date('fn_socio');
            $table->string('es_civil_socio', 40);
            $table->string('di_socio', 120);
            $table->string('ruc_socio', 50)->nullable();
            $table->foreignId('comunidad_id')->constrained()->references('id')->on('comunidads')->onDelete('cascade')->change();
            $table->string('latitud_socio', 20)->nullable();
            $table->string('longitud_socio', 20)->nullable();
            $table->string('ocupacion_socio', 20);
            $table->string('ginstruccion_socio', 20);
            $table->char('es_socio', 1);
            $table->string('im_socio', 200)->nullable();
            $table->string('conyugue_socio', 100)->nullable();
            $table->string('conyugue_dni_socio', 8)->nullable();
            $table->string('observaciones_socio', 220)->nullable();
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
