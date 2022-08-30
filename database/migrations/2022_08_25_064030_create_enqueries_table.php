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
        Schema::create('enqueries', function (Blueprint $table) {
            $table->id();
            $table->string('couple_one')->nullable();
            $table->string('couple_two')->nullable();
            $table->string('marriage_date')->nullable();
            $table->string('enquiry_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_code')->nullable();
            $table->tinyInteger('reffer_by')->default('1')->comment = '1=>social-media, 2=>website, 3=>other';
            $table->tinyInteger('status')->comment('0 = follow-up, 1=booked, 2=no-interest')->default(0);
            $table->text('enquiry')->nullable();
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
        Schema::dropIfExists('enqueries');
    }
};
