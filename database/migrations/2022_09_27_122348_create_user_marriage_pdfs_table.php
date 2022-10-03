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
        Schema::create('user_marriage_pdfs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('booking_id');
            $table->string('document_name')->nullable();
            $table->string('person1_signature')->nullable();
            $table->string('person2_signature')->nullable();
            $table->string('person1witness_signature')->nullable();
            $table->string('person2witness_signature')->nullable();
            $table->string('celebrant_signature')->nullable();
            $table->string('new_celebrant_signature')->nullable();
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
        Schema::dropIfExists('user_marriage_pdfs');
    }
};
