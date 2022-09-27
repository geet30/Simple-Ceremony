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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('celebrant_id')->nullable();
            $table->string('invoice_number')->nullable();
            $table->string('recipient_name')->nullable();
            $table->string('abn_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_number')->nullable();
            
            $table->tinyInteger('user_type')->default('1')->comment = '1 for admin, 2 for user,3 for partner,4 for celebrant';
            $table->text('notes')->nullable();
            $table->smallInteger('status')->comment('1 = Booked, 2=Lodged,3=Lodged-Pending,4=Non-Legal,5=Registered,6=Finalised,7=Settled,8=Cancelled')->default(0);
            $table->decimal('amount', 10, 2); 
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
