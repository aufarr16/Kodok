<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ulevel');
            $table->string('nama_user', 50);
            $table->string('email_user', 50);
            $table->string('inisial_user', 3)->unique();
            $table->string('password')->nullable();
            $table->string('added_by', 5);
            $table->string('modified_by', 3)->nullable();
            $table->string('remember_token')->nullable();
            $table->boolean('status_user');
            $table->timestamps();
        });
          
        //Schema::drop('users');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
