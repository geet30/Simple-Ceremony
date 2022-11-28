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
        Schema::create('ceremony_types', function (Blueprint $table) {
            $table->id();
            $table->string('ceremony_name')->nullable();
            $table->decimal('fee_adjustment', 10, 2)->default('0.00');
            $table->string('hyperlink_url')->nullable();
            $table->string('hyperlink_title')->nullable();
            $table->text('conditions')->nullable();
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
        Schema::dropIfExists('ceremony_types');
    }
};
