<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hijos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('socio_id')->constrained()->references('id')->on('socios')
            ->onDelete('cascade');
            $table->string('na_hijo', 100);
            $table->string('dni_hijo', 8)->nullable();
            $table->date('fn_hijo');
            $table->string('ginstruccion_hijo', 20);
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
        Schema::dropIfExists('hijos');
    }
}
