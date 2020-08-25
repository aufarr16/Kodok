<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsHandoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_handovers', function (Blueprint $table) {
            $table->bigIncrements('id_handover');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_project');
            $table->date('waktu_assign_handover');
            $table->date('waktu_selesai_handover')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_handovers');
    }
}