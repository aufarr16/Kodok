<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_project');
            $table->unsignedBigInteger('id_dtype');
            $table->string('nama_document', 240);
            $table->string('direktori_document', 200);
            $table->boolean('softcopy_status')->default(0);
            $table->boolean('hardcopy_status')->default(0);
            $table->unsignedBigInteger('uploaded_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
