<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMApbdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_apbds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uraian');
            $table->integer('jumlah');
            $table->string('sumber_anggaran');
            $table->string('keterangan');
            $table->string('tahun');
            $table->string('jenis_bidang');
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
        Schema::dropIfExists('m_apbds');
    }
}
