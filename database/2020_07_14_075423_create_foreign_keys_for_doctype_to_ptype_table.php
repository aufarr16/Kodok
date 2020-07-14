<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForDoctypeToPtypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('doctype_to_ptype', function (Blueprint $table) {
            $table->foreign('id_DocType')->references('id_DocType')->on('documents_type');
            $table->foreign('id_PType')->references('id_PType')->on('projects_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('doctype_to_ptype', function (Blueprint $table) {
            $table->dropForeign('doctype_to_ptype_id_DocType_foreign');
            $table->dropForeign('doctype_to_ptype_id_PType_foreign');        
        });*/
    }
}
