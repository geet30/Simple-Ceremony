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
        Schema::table('celebrant_details', function (Blueprint $table) {
            $table->string('follow_subject')->nullable()->after('standard_fee');
            $table->text('follow_Description')->nullable()->after('standard_fee');
            $table->string('image')->nullable()->after('standard_fee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('celebrant_details', function (Blueprint $table) {
            //
        });
    }
};
