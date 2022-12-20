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
        Schema::create('marriage_certificate_numbers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('certificate_prefix',30)->nullable();
            $table->string('certificate_suffix',30)->nullable();
            $table->string('first_certificate_no')->nullable();
            $table->string('no_of_certificates',10)->nullable();
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
        Schema::dropIfExists('marriage_certificate_numbers');
    }
};
