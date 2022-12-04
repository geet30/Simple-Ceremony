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
        Schema::create('celebrant_date_over_rides', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->enum('is_available',['yes','no'])->default('yes');
            $table->dateTime('override_date_start')->nullable();
            $table->dateTime('override_date_end')->nullable();
            $table->date('override_date')->nullable();
            $table->string('day')->default('');
            $table->string('dayText')->default('');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('booking_length')->default('0');
            $table->string('your_fee')->default('0');
            $table->string('admin_fee')->default('0');
            $table->bigInteger('location_id')->default(0)->comment('this field is link to request_location table if type is request_location else linked to location table');
            $table->string('location_fee')->default('0');
            $table->timestamps();
            // $table->foreign('celebrant_date_id')->references('id')->on('celebrant_dates')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('celebrant_date_over_rides');
    }
};
