<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('no_persona', 60);
            $table->string('ap_persona', 45);
            $table->string('am_persona', 45);
            $table->string('dni_persona', 8)->unique();
            $table->string('em_persona', 255)->unique();
            $table->string('nu_celular_persona', 20)->nullable();
            $table->date('fn_persona');
            $table->string('es_civil_persona', 40);
            $table->string('di_persona', 120);
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
        Schema::dropIfExists('personas');
    }
}
