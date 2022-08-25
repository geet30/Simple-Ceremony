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
        Schema::create('admin_taxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->double('partner_tax', 12, 2)->default(0)->nullable();
            $table->double('celebrant_tax', 12, 2)->default(0)->nullable();
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_taxes');
    }
};
