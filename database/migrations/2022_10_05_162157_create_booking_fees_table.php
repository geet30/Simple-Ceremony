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
        Schema::create('booking_fees', function (Blueprint $table) {
            $table->id();
            $table->double('admin_fee', 12, 2)->default(0)->nullable();
            $table->double('celebrant_fee', 12, 2)->default(0)->nullable();
            $table->double('partner_fee', 12, 2)->default(0)->nullable();
            $table->double('location_fee', 12, 2)->default(0)->nullable();
            $table->double('reschedule_fee', 12, 2)->default(0)->nullable();
            $table->double('gst_fee', 12, 2)->default(0)->nullable();
            $table->double('total_fee', 12, 2)->default(0)->nullable();
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
        Schema::dropIfExists('booking_fees');
    }
};
