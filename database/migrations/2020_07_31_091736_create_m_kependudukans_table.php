<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMKependudukansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kependudukans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('tempat_lhr');
            $table->date('dob');
            $table->string('nik')->unique();
            $table->string('kk');
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('pendidikan');
            $table->string('status_kel');
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
        Schema::dropIfExists('m_kependudukans');
    }
}
