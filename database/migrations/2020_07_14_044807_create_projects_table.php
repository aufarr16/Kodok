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
            $table->bigIncrements('id_projects');
            $table->unsignedBigInteger('id_pketerangan');
            $table->unsignedBigInteger('id_pstatus');
            $table->unsignedBigInteger('id_ptype');
            $table->unsignedBigInteger('id_produk');
            $table->unsignedBigInteger('id_users');
            $table->Integer('ABA');
            $table->string('nama_projek');
            $table->boolean('status_handover');
            $table->date('waktu_assign_projek');
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
