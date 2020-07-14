<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectshandoverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_handover', function (Blueprint $table) {
            $table->bigIncrements('id_handover');
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_projects');
            $table->date('waktu_assign_handover');
            $table->date('waktu_selesai_handover');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projectshandover');
    }
}
