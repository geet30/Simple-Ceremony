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
        Schema::table('celebrant_date_over_rides', function (Blueprint $table) {
            $table->unsignedBigInteger('calendar_dayslot_id')->nullable()->after('user_id');
            $table->foreign('calendar_dayslot_id')->references('id')->on('celebrant_day_slots')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('celebrant_date_over_rides', function (Blueprint $table) {
            //
        });
    }
};
