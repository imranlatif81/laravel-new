<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category')->nullable(true)->default(NULL);
            $table->string('summary')->nullable(true)->default(NULL);
            $table->string('reference')->nullable(true)->default(NULL);
            $table->string('imageRef')->nullable(true)->default(NULL);
            $table->string('iconRef')->nullable(true)->default(NULL);
            $table->tinyInteger('isTechnical')->nullable(true)->default(NULL);
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
        Schema::dropIfExists('categories');
    }
}
