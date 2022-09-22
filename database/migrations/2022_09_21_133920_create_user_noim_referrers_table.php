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
        Schema::create('user_noim_referrers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('booking_id');
            $table->text('further_help');
            $table->text('how_did_you_find_us');
            $table->text('when_did_you_hear_about_us');
            $table->text('process_feedback');
            $table->boolean('need_interpreter')->default(false);
            $table->string('language_speak')->nullable();
            $table->string('interpreter_full_name')->nullable();
            $table->string('interpreter_occupation')->nullable();
            $table->text('interpreter_address')->nullable();
            $table->boolean('read_google_review_before_booking')->default(false);
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
        Schema::dropIfExists('user_noim_referrers');
    }
};
