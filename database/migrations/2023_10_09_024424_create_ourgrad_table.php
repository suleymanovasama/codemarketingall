<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurgradTable extends Migration
{

    public function up()
    {
        Schema::create('ourgrad', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->timestamps();
        });
        Schema::create('ourgrad_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ourgrad_model_id');
            $table->string('locale')->index();
            $table->string('title')->nullable();
            $table->string('text')->nullable();
            $table->string('text2')->nullable();

            $table->unique(['ourgrad_model_id', 'locale']);
            $table->foreign('ourgrad_model_id')->references('id')->on('ourgrad')->onDelete('cascade');
        });
    }


    public function down()
    {

        Schema::dropIfExists('ourgrad_translations');
        Schema::dropIfExists('ourgrad');
    }
}
