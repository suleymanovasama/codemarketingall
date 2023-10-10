<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstinfoTable extends Migration
{

    public function up()
    {
        Schema::create('firstinfo', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->timestamps();
        });

        Schema::create('firstinfo_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('firstinfo_id');
            $table->text('title');

            $table->string('locale')->index();
            $table->unique(['firstinfo_id', 'locale']);
            $table->foreign('firstinfo_id')->references('id')->on('firstinfo')->onDelete('cascade');
        });

    }


    public function down()
    {
        Schema::dropIfExists('firstinfo_translations');
        Schema::dropIfExists('firstinfo');
    }
}
