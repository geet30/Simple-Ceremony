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
        Schema::create('celebrant_day_slots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('celebrant_date_id');
            $table->string('day')->default('');
            $table->string('dayText')->default('');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('booking_length')->default('0');
            $table->string('your_fee')->default('0');
            $table->string('admin_fee')->default('0');
            $table->bigInteger('location_id')->default(0)->comment('this field is link to request_location table if type is request_location else linked to location table');
            $table->string('location_fee')->default('0');
            $table->enum('type',['request_location','location'])->default('request_location');
            $table->timestamps();
            $table->foreign('celebrant_date_id')->references('id')->on('celebrant_dates')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('celebrant_day_slots');
    }
};
