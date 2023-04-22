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
        Schema::create('form_data_contact', function (Blueprint $table) {
            $table->id();
            $table->string('fn');
            $table->string('ln');
            $table->text('pa');
            $table->string('province');
            $table->string('cor');
            $table->text('relationship');
            $table->string('iepn');
            $table->string('ieea');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_data_contact');
    }
};
