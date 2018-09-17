<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_modules', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('courseId');
            $table->unsignedInteger('parentCourseId');
            $table->tinyInteger('moduleStartDay')->nullable(true)->default(NULL);
            $table->tinyInteger('moduleStartDayGlobal')->nullable(true)->default(NULL);
            $table->tinyInteger('moduleStartDayWeekend')->nullable(true)->default(NULL);
            $table->tinyInteger('moduleStartDayGlobalWeekend')->nullable(true)->default(NULL);
            $table->foreign('courseId')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('parentCourseId')->references('id')->on('courses')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('course_modules');
    }
}
