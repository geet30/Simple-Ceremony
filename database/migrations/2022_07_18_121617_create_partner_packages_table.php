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
        Schema::create('partner_packages', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('product_id');
                $table->string('package_name')->nullable();            
                $table->decimal('partner_fee', 10, 2); 
                $table->decimal('admin_fee', 10, 2); 
                $table->decimal('total_fee', 10, 2); 
                $table->string('deposit')->nullable();
                $table->decimal('simulation_partner_fee', 10, 2); 
                $table->decimal('simulation_admin_fee', 10, 2); 
                $table->decimal('simulation_total_fee', 10, 2); 
                $table->text('location_description')->nullable();
                $table->string('title_term')->nullable();
                $table->text('terms')->nullable();
                $table->timestamps();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
                $table->foreign('product_id')->references('id')->on('partner_products')->onDelete('cascade'); 
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partner_packages');
    }
};
