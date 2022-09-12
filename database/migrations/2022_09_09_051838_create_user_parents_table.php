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
        Schema::create('user_parents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('user_noim_id');
            $table->string('current_name');
            $table->string('first_name');
            $table->string('other_name')->nullable();
            $table->string('birth_name')->nullable();
            $table->string('birth_first_name')->nullable();
            $table->string('birth_other_name')->nullable();
            $table->string('birth_place');
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
        Schema::dropIfExists('user_parents');
    }
};
