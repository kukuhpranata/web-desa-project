<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMPerceraiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_perceraians', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_suami');
            $table->string('nama_istri');
            $table->date('tgl_nikah');
            $table->date('tgl_cerai');
            $table->string('alamat');
            $table->string('no_akta_cerai');
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
        Schema::dropIfExists('m_perceraians');
    }
}
