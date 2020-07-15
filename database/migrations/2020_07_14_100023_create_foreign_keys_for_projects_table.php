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
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_pketerangan')->references('id_pketerangan')->on('projects_keterangans');
            $table->foreign('id_pstat')->references('id_pstat')->on('projects_stats');
            $table->foreign('id_ptype')->references('id_ptype')->on('projects_types');
            $table->foreign('id_product')->references('id_product')->on('products');
            $table->foreign('ABA')->references('ABA')->on('mitras');
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
