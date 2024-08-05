<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBbtablesTable extends Migration
{
    public function up()
    {
        Schema::create('bbtables', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bbtables');
    }
}

