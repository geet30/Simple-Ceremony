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
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('location_name')->nullable()->after('booking_end_time');
            
            $table->bigInteger('calendar_dayslot_id')->nullable()->after('booking_end_time');
            $table->string('full_name_of_person_1')->nullable()->after('booking_end_time');
            $table->string('full_name_of_person_2')->nullable()->after('booking_end_time');
            $table->string('full_name_of_witness_1')->nullable()->after('booking_end_time');
            $table->string('full_name_of_witness_2')->nullable()->after('booking_end_time');
            $table->string('full_name_of_child')->nullable()->after('booking_end_time');
            $table->string('full_name_of_parent_1')->nullable()->after('booking_end_time');
            $table->string('full_name_of_parent_2')->nullable()->after('booking_end_time');
            $table->string('full_name_of_sponsor_1')->nullable()->after('booking_end_time');
            $table->string('full_name_of_sponsor_2')->nullable()->after('booking_end_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
        });
    }
};
