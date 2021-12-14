<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokers', function (Blueprint $table) {
            $table->id();
            $table->string('pekerjaan');
            $table->unsignedBigInteger('perusahaan_id');
            $table->string('lokasi');
            $table->text('deskripsi');
            $table->integer('gaji');
            $table->date('tgl_tutup');
            $table->timestamps();
            $table->foreign('perusahaan_id')->references('user_id')->on('perusahaans')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokers');
    }
}
