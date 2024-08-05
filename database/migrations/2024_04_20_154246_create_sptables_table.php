<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSptablesTable extends Migration
{
    public function up()
    {
        Schema::create('sptables', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sptables');
    }
}

