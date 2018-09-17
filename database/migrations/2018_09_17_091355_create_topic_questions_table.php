<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('topicId');
            $table->string('question_title',255)->nullable(true)->default(NULL);
            $table->text('question_desc');
            $table->foreign('topicId')->references('id')->on('topics')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('topic_questions');
    }
}
