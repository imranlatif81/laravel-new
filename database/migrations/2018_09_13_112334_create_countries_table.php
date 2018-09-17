<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255)->nullable(true)->default(NULL);
            $table->char('countryCode', 3)->nullable(true)->default(NULL);
            $table->text('countryDesc');
            $table->char('iso3', 3)->nullable(true)->default(NULL);
            $table->char('currency', 3)->nullable(true)->default(NULL);
            $table->string('currencySymbol',5)->nullable(true)->default(NULL);
            $table->string('currencySymbolHTML',5)->nullable(true)->default(NULL);
            $table->string('currencyTitle',5)->nullable(true)->default(NULL);
            $table->tinyInteger('allowPO')->nullable(true)->default(NULL);
            $table->tinyInteger('chargeVAT')->nullable(true)->default(NULL);
            $table->string('salesTaxLabel',10)->nullable(true)->default(NULL);
            $table->double('exchangeRate')->nullable(true)->default(NULL);
            $table->double('salesRatio')->nullable(true)->default(NULL);
            $table->double('vatAmount')->nullable(true)->default(NULL);
            $table->double('vatAmountElearning')->nullable(true)->default(NULL);
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
        Schema::dropIfExists('countries');
    }
}
