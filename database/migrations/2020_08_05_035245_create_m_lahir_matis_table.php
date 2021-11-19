<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMLahirMatisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_lahir_matis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->date('dob');
            $table->string('alamat');
            $table->string('nama_bapak');
            $table->string('nama_ibu');
            $table->string('dod');
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
        Schema::dropIfExists('m_lahir_matis');
    }
}
