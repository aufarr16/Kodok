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
            $table->id();
            $table->dateTime('waktu_assign_project')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unsignedBigInteger('id_pketerangan')->nullable();
            $table->unsignedBigInteger('id_pstat');
            $table->unsignedBigInteger('id_ptype');
            $table->unsignedBigInteger('id_product');
            $table->unsignedBigInteger('id_mitra');
            $table->unsignedBigInteger('id_current_pic');
            $table->unsignedBigInteger('id_original_pic');
            $table->unsignedBigInteger('id_pic_product')->nullable();
            $table->unsignedBigInteger('id_pic_am')->nullable();
            $table->unsignedBigInteger('id_pic_pm')->nullable();
            $table->string('nama_project', 256);
            $table->float('progress_sit')->default(0);
            $table->float('progress_uat')->default(0);
            $table->boolean('status_handover');
            $table->integer('handover_counter');
            $table->unsignedBigInteger('stats_temp')->nullable();    
            $table->string('pketerangan_status')->nullable();
            $table->string('pketerangan_note')->nullable();
            $table->string('notes_project', 301)->nullable();
            $table->integer('bobot_project')->nullable();
            $table->string('dir_project', 200);
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
