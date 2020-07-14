<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->foreign('id_users')->references('id_users')->on('users');
            $table->foreign('id_pketerangan')->references('id_pketerangan')->on('projects_keterangan');
            $table->foreign('id_pstatus')->references('id_pstatus')->on('projects_status');
            $table->foreign('id_ptype')->references('id_ptype')->on('projects_type');
            $table->foreign('id_produk')->references('id_produk')->on('produk');
            $table->foreign('ABA')->references('ABA')->on('mitra');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('projects_id_users_foreign');
            $table->dropForeign('projects_id_PKeterangan_foreign');
            $table->dropForeign('projects_id_PStatus_foreign');
            $table->dropForeign('projects_id_PType_foreign');
            $table->dropForeign('projects_id_produk_foreign');
            $table->dropForeign('projects_ABA_foreign');
        });
    }
}
