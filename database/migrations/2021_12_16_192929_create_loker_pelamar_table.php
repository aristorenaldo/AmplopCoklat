<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokerPelamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loker_pelamar', function (Blueprint $table) {
            $table->unsignedBigInteger('pelamar_id');
            $table->unsignedBigInteger('loker_id');
            $table->string('resume');
            $table->string('dokumen_pendukung');
            $table->string('status');   
            $table->foreign('pelamar_id')->references('user_id')->on('pelamars')->cascadeOnDelete();
            $table->foreign('loker_id')->references('id')->on('lokers')->cascadeOnDelete();
            $table->primary(['pelamar_id','loker_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loker_pelamar');
    }
}
