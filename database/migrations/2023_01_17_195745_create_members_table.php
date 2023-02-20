<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string("code", 25)->unique()->nullable();
            $table->string("cni", 25)->unique()->nullable();
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('address', 100)->nullable();
            $table->string('email', 55)->unique()->nullable();
            $table->string('phone', 20)->unique();
            $table->enum('sex', ['M', 'F']);
            $table->timestamp('date_membership')->useCurrent();
            $table->foreignId('member_function_id')->constrained();
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
        Schema::dropIfExists('members');
    }
}
