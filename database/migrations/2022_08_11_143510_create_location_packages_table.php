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
        Schema::create('location_packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id');
            $table->string('location_category')->nullable();
            $table->integer('partner_id')->nullable()->unsigned();
            $table->integer('package_id')->nullable()->unsigned();
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade'); 
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
        Schema::dropIfExists('location_packages');
    }
};
