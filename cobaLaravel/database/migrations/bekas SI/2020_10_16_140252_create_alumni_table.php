<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
		$table->increments('id');
		$table->integer('nim');
		$table->string('nama');
		$table->integer('angkatan');
		$table->string('tempat_lahir');
		$table->date('tanggal_lahir');
		$table->string('email');
		$table->integer('prodi_id');
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
        Schema::dropIfExists('alumni');
    }
}
