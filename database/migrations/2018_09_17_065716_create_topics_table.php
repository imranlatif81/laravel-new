<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(true)->default(NULL);
            $table->string('reference')->nullable(true)->default(NULL);
            $table->tinyInteger('accreditationId')->nullable(true)->default(NULL);
            $table->unsignedInteger('categoryId');
            $table->timestamps();
            $table->unique('categoryId', 'topicCategoryId');
            $table->foreign('categoryId')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
