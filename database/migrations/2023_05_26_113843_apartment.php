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
        Schema::create('apartment', function (Blueprint $table) {
            $table->id('apartment_id');
            $table->unsignedBigInteger('lessor_id');
            $table->foreign('lessor_id')->references('lessor_id')->on('lessor');
            $table->decimal('price', 8, 2);
            $table->unsignedBigInteger('address_id');
            $table->foreign('address_id')->references('address_id')->on('addresses');
            $table->string('description');
            $table->integer('room_count');
            $table->decimal('area', 8, 2);
            $table->string('image')->nullable();
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
