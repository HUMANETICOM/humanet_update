<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->string('userID');
            $table->string('civilstatus');
            $table->text('language');
            $table->string('height');
            $table->string('weight');
            $table->text('professions');
            $table->string('otherCitizenship');
            $table->string('prn');
            $table->string('pea');
            $table->text('street');
            $table->text('city');
            $table->text('province');
            $table->text('postalcode');
            $table->string('countrycode');
            $table->string('spn');
            $table->string('sea');
            $table->text('street2');
            $table->string('city2');
            $table->string('province2');
            $table->text('postalcode2');
            $table->string('countrycode2');
            $table->string('epn');
            $table->string('eea');
            $table->text('street3');
            $table->string('city3');
            $table->string('province3');
            $table->text('postalcode3');
            $table->string('countrycode3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_data');
    }
};
