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
        Schema::table('location_packages', function (Blueprint $table) {
            $table->tinyInteger('location_type')->default('1')->after('location_id')->comment = '1=>user, 2=>celebrant, 3=>other';           
            $table->integer('request_location_id')->nullable()->unsigned()->after('location_id');
            $table->unsignedBigInteger('location_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('location_packages', function (Blueprint $table) {
            //
        });
    }
};
