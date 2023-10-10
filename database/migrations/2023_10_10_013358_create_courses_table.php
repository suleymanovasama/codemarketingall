<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{

    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('link');
            $table->string('fullpay');
            $table->string('fullmonth');
            $table->string('fulltam');

            $table->string('partpay');
            $table->string('partmonth');
            $table->string('parttam');
            $table->timestamps();
        });
        Schema::create('courses_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('courses_model_id');
            $table->string('locale')->index();
            $table->string('name')->nullable();
            $table->string('caption')->nullable();
            $table->string('full_text')->nullable();
            $table->string('part_text')->nullable();
            $table->string('inner_text1')->nullable();
            $table->string('inner_text2')->nullable();

            $table->unique(['courses_model_id', 'locale']);
            $table->foreign('courses_model_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('courses_translations');
        Schema::dropIfExists('courses');
    }
}
