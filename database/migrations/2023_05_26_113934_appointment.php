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
        Schema::create('appointment', function (Blueprint $table) {
            $table->id('appointment_id');
            $table->unsignedBigInteger('apartment_id');
            $table->foreign('apartment_id')->references('apartment_id')->on('apartment');
            $table->date('maintenance_date');
            $table->integer('duration');
            $table->string('progress');
            $table->timestamps();
        });
        //
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
