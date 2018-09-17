<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsiteCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_countries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('webId');
            $table->unsignedInteger('countryId');
            $table->string('contactNumber')->nullable(true)->default(NULL);
            $table->string('contactEmail')->nullable(true)->default(NULL);
            $table->text('contactFooter');
            $table->text('copyrightFooter');
            $table->string('openingHours')->nullable(true)->default(NULL);
            $table->unsignedInteger('openingDays');
            $table->tinyInteger('isActive')->nullable(true)->default(1);
            $table->tinyInteger('isAdvert')->nullable(true)->default(NULL);
            $table->string('globalirisMerchantId',50)->nullable(true)->default(NULL);
            $table->string('globalirisAccount',50)->nullable(true)->default(NULL);
            $table->string('globalirisSecret',50)->nullable(true)->default(NULL);
            $table->tinyInteger('isVirtualFirst')->nullable(true)->default(NULL);
            $table->tinyInteger('isVirtualClassroom')->nullable(true)->default(NULL);
            $table->string('mapId',255)->nullable(true)->default(NULL);
            $table->unique(['webId', 'countryId'],'UNIQUE');
            $table->unique('countryId', 'IndexCountryId');
            $table->unique('webId', 'IndexWebId');
            $table->unique('openingDays', 'CountryOpeningDays');
            $table->foreign('openingDays')->references('id')->on('country_opening_days')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('countryId')->references('id')->on('countries')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('webId')->references('id')->on('websites')->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('website_countries');
    }
}
