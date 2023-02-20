<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHadiyasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hadiyas', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->foreignId('hadiya_type_id')->constrained();
            $table->foreignId('member_id')->constrained();
            $table->foreignId('payment_method_id')->constrained();
            $table->timestamp('date')->useCurrent();
            $table->text('description');
            $table->unsignedBigInteger('user_created')->nullable()->references('id')->on('users');
            $table->unsignedBigInteger('user_modified')->nullable()->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hadiyas');
    }
}
