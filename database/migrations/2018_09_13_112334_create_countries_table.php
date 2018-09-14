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
            $table->string('name',255)->nullable();
            $table->char('countryCode', 3)->nullable();
            $table->text('countryDesc');
            $table->char('iso3', 3)->nullable();
            $table->char('currency', 3)->nullable();
            $table->string('currencySymbol',5)->nullable();
            $table->string('currencySymbolHTML',5)->nullable();
            $table->string('currencyTitle',5)->nullable();
            $table->tinyInteger('allowPO')->nullable();
            $table->tinyInteger('chargeVAT')->nullable();
            $table->string('salesTaxLabel',10)->nullable();
            $table->double('exchangeRate')->nullable();
            $table->double('salesRatio')->nullable();
            $table->double('vatAmount')->nullable();
            $table->double('vatAmountElearning')->nullable();
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
