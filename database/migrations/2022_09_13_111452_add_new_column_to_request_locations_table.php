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
        Schema::table('request_locations', function (Blueprint $table) {
            $table->tinyInteger('custom_location')->default('0')->after('getting_there')->comment = '1 for yes, 0 for no';
            $table->integer('custom_location_id')->nullable()->unsigned()->after('custom_location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request_locations', function (Blueprint $table) {
            //
        });
    }
};
