<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamars', function (Blueprint $table) {

            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->boolean('jenis_kelamin');//0->pria 1->wanita
            $table->unsignedBigInteger('jenis_disabilitas');//1->tuna rungu  2->tuna daksa  3->tuna wicara  4->autisme
            $table->string('resume')->nullable();
            $table->primary('user_id');
            $table->foreign('jenis_disabilitas')->references('id')->on('jenis_difabels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelamars');
    }
}
