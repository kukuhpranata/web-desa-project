<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMPernikahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_pernikahans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_suami');
            $table->string('nama_istri');
            $table->date('tgl_nikah');
            $table->string('alamat');
            $table->string('wali');
            $table->string('tempat_nikah');
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
        Schema::dropIfExists('m_pernikahans');
    }
}
