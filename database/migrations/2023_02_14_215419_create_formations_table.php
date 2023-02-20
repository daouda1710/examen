<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->integer('duree');
            $table->text('description');
            $table->boolean('isStarted');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->Integer('referentiel_id')->unsigned();
            $table->foreign('referentiel_id')->references('id')->on('referentiels');
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
        Schema::dropIfExists('formations');
    }
}
