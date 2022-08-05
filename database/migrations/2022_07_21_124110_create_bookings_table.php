<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('locationId');
            $table->string('booking_date')->nullable();
            $table->string('booking_start_time')->nullable();
            $table->string('booking_end_time')->nullable();
            $table->smallInteger('status')->comment('0 = pending, 1=approved')->default(0);
            $table->string('first_couple_name')->nullable();
            $table->string('second_couple_name')->nullable();
            $table->string('ceremony_type')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->foreign('locationId')->references('id')->on('locations')->onDelete('cascade'); 
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
        Schema::dropIfExists('bookings');
    }
};
