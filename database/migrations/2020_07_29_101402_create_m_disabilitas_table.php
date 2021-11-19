<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMDisabilitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_disabilitas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('tempat_lhr');
            $table->date('dob');
            $table->string('nik')->nullable();
            $table->string('kk')->nullable();
            $table->string('alamat');
            $table->string('jenis_dis');
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
        Schema::dropIfExists('m_disabilitas');
    }
}
