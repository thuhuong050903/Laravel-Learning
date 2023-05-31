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
        Schema::create('issues', function (Blueprint $table) {
            $table->id('issue_id');
            $table->unsignedBigInteger('renter_id');
            $table->foreign('renter_id')->references('renter_id')->on('renter');
            $table->unsignedBigInteger('apartment_id');
            $table->foreign('apartment_id')->references('apartment_id')->on('apartment');
            $table->string('description');
            $table->date('report_date');
            $table->string('status');
            $table->timestamps();
        });
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
