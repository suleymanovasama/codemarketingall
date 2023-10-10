<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogoTable extends Migration
{

    public function up()
    {
        Schema::create('logo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image')->nullable();
        });
    }


    public function down()
    {
        Schema::dropIfExists('logo');
    }
}
