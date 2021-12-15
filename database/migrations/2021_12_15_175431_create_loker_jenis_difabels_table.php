<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokerJenisDifabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loker_jenis_difabels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loker_id')->constrained()->cascadeOnDelete();
            $table->unsignedBigInteger('jenis_difabel_id');
            $table->foreign('jenis_difabel_id')->references('id')->on('jenis_difabels')->cascadeOnDelete();
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
        Schema::dropIfExists('loker_jenis_difabels');
    }
}
