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
        //
        Schema::create('lessor', function (Blueprint $table) {
            $table->id('lessor_id');
            $table->string('lessor_name');
            $table->string('lessor_email')->unique();
            $table->string('lessor_phone');
            $table->string('lessor_address');
            $table->string('lessor_password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
