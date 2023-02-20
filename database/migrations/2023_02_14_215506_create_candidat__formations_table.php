<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidat_formation', function (Blueprint $table) {
            $table->increments('id');

            $table->Integer('formation_id')->unsigned();
            $table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade');

            $table->Integer('candidat_id')->unsigned();
            $table->foreign('candidat_id')->references('id')->on('candidats')->onDelete('cascade');
 
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
        Schema::dropIfExists('candidat__formations');
    }
}
