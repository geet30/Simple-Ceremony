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
        Schema::create('user_marriage_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('booking_id');
            $table->boolean('is_document_electronically_signed')->default(false);
            $table->string('how_did_you_have_noim_witnessed');
            $table->string('authorization_code')->nullable();
            $table->string('person_1_witness_name');
            $table->string('who_signed_person_1_witness');
            $table->string('person_1_witness_occupation_name')->nullable();
            $table->string('person_2_witness_name');
            $table->string('who_signed_person_2_witness');
            $table->string('person_2_witness_occupation_name')->nullable();
            $table->string('signed_noim_document')->nullable();
            $table->boolean('party_not_speak_english')->default(true);
            $table->string("language_speak")->nullable();
            $table->string("interpreter_full_name")->nullable();
            $table->string("interpreter_address")->nullable();
            $table->string("interpreter_occupation")->nullable();
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
        Schema::dropIfExists('user_marriage_documents');
    }
};
