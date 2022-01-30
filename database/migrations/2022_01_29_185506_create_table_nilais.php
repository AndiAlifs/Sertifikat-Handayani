<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableNilais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sertifikat_id');
            $table->foreign('sertifikat_id')->references('id')->on('sertifikats')->onDelete('cascade');
            $table->unsignedBigInteger('kompetensi_id');
            $table->foreign('kompetensi_id')->references('id')->on('kompetensis')->onDelete('cascade');
            $table->bigInteger('nilai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilais');
    }
}
