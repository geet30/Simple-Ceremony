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
        Schema::create('user_personal_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');         
            $table->string('address')->nullable();
            $table->string('town')->nullable();
            $table->string('state')->nullable();
            $table->string('post_code')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
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
        Schema::dropIfExists('user_personal_details');
    }
};
