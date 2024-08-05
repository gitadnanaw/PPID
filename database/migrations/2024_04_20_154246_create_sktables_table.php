<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSktablesTable extends Migration
{
    public function up()
    {
        Schema::create('sktables', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->integer('tahun');
            $table->string('nomor_peraturan');
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sktables');
    }
}

