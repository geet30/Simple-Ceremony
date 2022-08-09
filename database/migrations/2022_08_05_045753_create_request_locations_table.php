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
        Schema::create('request_locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->integer('country_code')->nullable()->unsigned();
            $table->string('email')->unique();
            $table->string('event_date')->nullable();
            $table->string('event_start_time')->nullable();
            $table->string('location_name');
            $table->string('street_address')->nullable();
            $table->string('suburb')->nullable();
            $table->string('post_code')->nullable();
            $table->string('state')->nullable();
            $table->text('specific_location')->nullable();
            $table->string('coordinates')->nullable();
            $table->string('parking_details')->nullable();
            $table->decimal('parking_cost',10,2)->default(0);
            $table->smallInteger('status')->comment('0 = pending, 1=approved,2=rejected')->default(0);
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
        Schema::dropIfExists('request_locations');
    }
};
