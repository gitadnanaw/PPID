<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDktablesTable extends Migration
{
    public function up()
    {
        Schema::create('dktables', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->integer('tahun');
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dktables');
    }
}

