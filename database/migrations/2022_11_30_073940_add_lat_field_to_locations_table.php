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
        Schema::table('locations', function (Blueprint $table) {
            $table->string('latitude')->default('')->after('post_code');
            $table->string('longitude')->default('')->after('post_code');
            // $table->dropColumn('coordinates');
        });
        Schema::table('request_locations', function (Blueprint $table) {
            $table->string('latitude')->default('')->after('post_code');
            $table->string('longitude')->default('')->after('post_code');
            // $table->dropColumn('coordinates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
            $table->string('coordinates')->default('');
        });
        Schema::table('request_locations', function (Blueprint $table) {
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
            $table->string('coordinates')->default('');
        });
    }
};
