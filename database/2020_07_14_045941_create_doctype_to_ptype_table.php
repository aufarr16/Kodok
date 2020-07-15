<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctypeToPtypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctype_to_ptype', function (Blueprint $table) {
            $table->unsignedBigInteger('id_DocType');
            $table->unsignedBigInteger('id_PType');

            $table->primary(['id_Doctype', 'id_PType']);
        });

        //Schema::drop('doctype_to_ptype');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctype_to_ptype');
    }
}
