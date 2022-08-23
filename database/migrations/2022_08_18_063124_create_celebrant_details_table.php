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
        Schema::create('celebrant_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('celebrant_id');
            $table->string('description')->nullable();
            $table->string('address')->nullable();
            $table->double('admin_fee', 12, 2)->default(0)->nullable();
            $table->double('standard_fee', 12, 2)->default(0)->nullable();
            $table->timestamps(); 
            $table->foreign('celebrant_id')->references('id')->on('users')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('celebrant_details');
    }
};
