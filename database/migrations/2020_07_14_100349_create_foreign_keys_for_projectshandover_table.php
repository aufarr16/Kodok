<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForProjectshandoverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects_handovers', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users');    
            $table->foreign('id_project')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects_handovers', function (Blueprint $table) {
            $table->dropForeign('projects_handover_id_users_foreign');
            $table->dropForeign('projects_handover_id_projects_foreign');           
        });
    }
}
