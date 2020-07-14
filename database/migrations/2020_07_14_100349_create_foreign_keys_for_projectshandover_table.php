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
        Schema::table('projects_handover', function (Blueprint $table) {
            $table->foreign('id_users')->references('id_users')->on('users');    
            $table->foreign('id_projects')->references('id_projects')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects_handover', function (Blueprint $table) {
            $table->dropForeign('projects_handover_id_users_foreign');
            $table->dropForeign('projects_handover_id_projects_foreign');           
        });
    }
}
