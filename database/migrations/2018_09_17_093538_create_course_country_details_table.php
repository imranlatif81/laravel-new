<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseCountryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_country_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('webCountryId');
            $table->unsignedInteger('courseId');
            $table->string('h1')->nullable();
            $table->text('summary');
            $table->string('title')->nullable();
            $table->text('description');
            $table->text('keywords');
            $table->text('examDetails');
            $table->text('audience');
            $table->text('whatsincluded');
            $table->text('overview');
            $table->text('overviewBulletList');
            $table->integer('orderSeq')->nullable();
            $table->unique(['webCountryId', 'courseId'],'UNIQUE');
            $table->unique('webCountryId', 'IndexCountryId');
            $table->unique('courseId','IndexCourseId');
            $table->foreign('webCountryId')
              ->references('id')->on('website_countries')
              ->onDelete('cascade')
              ->onUpdate('cascade');
            $table->foreign('courseId')
              ->references('id')->on('courses')
              ->onDelete('cascade')
              ->onUpdate('cascade');

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
        Schema::dropIfExists('course_country_details');
    }
}
