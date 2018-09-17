<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(true)->default(NULL);
            $table->string('reference')->nullable(true)->default(NULL);
            $table->integer('accreditationId')->nullable(true)->default(NULL);
            $table->string('code',50)->nullable(true)->default(NULL);
            $table->tinyInteger('duration')->nullable(true)->default(NULL);
            $table->tinyInteger('durationGlobal')->nullable(true)->default(NULL);
            $table->tinyInteger('examIncluded')->default(0);
            $table->double('examPrice');
            $table->tinyInteger('isModule')->default(0);
            $table->tinyInteger('isWeekend')->default(0);
            $table->tinyInteger('isOnline')->default(0);
            $table->tinyInteger('isVirtual')->default(0);
            $table->string('preReq')->nullable(true);
            $table->string('preCourseReading',50)->nullable(true)->default(NULL);
            $table->double('pdu')->nullable(true)->default(NULL);
            $table->integer('topicId')->nullable(true)->default(NULL);

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
        Schema::dropIfExists('courses');
    }
}
