<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatablesTable extends Migration
{
    public function up()
    {
        Schema::create('patables', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patables');
    }
}

