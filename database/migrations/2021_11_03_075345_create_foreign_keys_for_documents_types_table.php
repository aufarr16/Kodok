<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysForDocumentsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('documents_types', function (Blueprint $table) {
            $table->foreign('id_dcategory')->references('id')->on('documents_categories');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documents_types', function (Blueprint $table) {
            $table->dropForeign('documents_types_id_dcategory_foreign');
        });
    }
}
