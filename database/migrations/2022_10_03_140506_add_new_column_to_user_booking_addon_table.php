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
        Schema::table('user_booking_addons', function (Blueprint $table) {
            $table->smallInteger('addon_type')->comment('1 = location, 2=cart,3=other')->default(1)->after('partner_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_booking_addons', function (Blueprint $table) {
            //
        });
    }
};
