<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id_project');
            $table->date('waktu_assign_projek');
            $table->unsignedBigInteger('id_pketerangan');
            $table->unsignedBigInteger('id_pstat');
            $table->unsignedBigInteger('id_ptype');
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_user');
            $table->char('ABA', 13);
            $table->string('nama_projek', 201);
            $table->boolean('status_handover');
            $table->string('pketerangan_note');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
