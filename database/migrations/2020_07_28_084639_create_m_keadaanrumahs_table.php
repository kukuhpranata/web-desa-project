<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMKeadaanrumahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_keadaan_rumahs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kemiskinan_id')->unsigned();
            $table->string('atap');
            $table->string('dinding');
            $table->string('lantai');
            $table->timestamps();
            
            $table->foreign('kemiskinan_id')->references('id')->on('m_kemiskinans')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_keadaanrumahs');
    }
}
