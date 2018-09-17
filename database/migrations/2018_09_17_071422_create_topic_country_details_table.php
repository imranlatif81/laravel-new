<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicCountryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_country_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('webCountryId');
            $table->unsignedInteger('topicId');
            $table->string('h1')->nullable(true)->default(NULL);
            $table->text('summary');
            $table->text('details');
            $table->text('whatsIncluded');
            $table->text('overview');
            $table->text('overviewBulletList');
            $table->text('accreditationSummary');
            $table->text('benefitsIndividual');
            $table->text('benefitsBusiness');
            $table->text('topicCourses');
            $table->text('ipTradeMark');
            $table->Integer('orderSeq')->nullable(true)->default(NULL);
            $table->unique(['webCountryId', 'topicId'],'UNIQUE');
            $table->unique('webCountryId', 'IndexCountryId');
            $table->unique('topicId', 'IndexTopicId');
            $table->foreign('webCountryId')->references('id')->on('website_countries')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('topic_country_details');
    }
}
