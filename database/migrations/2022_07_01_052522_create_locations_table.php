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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('added_by');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('town')->nullable();
            $table->string('post_code')->nullable();
            $table->string('coordinates')->nullable();
            $table->string('direction')->nullable();
            $table->string('general_location')->nullable();
            $table->string('loc_number')->nullable();
            $table->decimal('price',10,2)->default(0);
            $table->string('cover_image')->nullable();
            $table->text('custom_terms')->nullable();
            $table->text('why_this_location')->nullable();
            $table->string('weather_option')->nullable();
            $table->string('getting_there')->nullable();
            $table->tinyInteger('custom_location')->default('0')->comment = '1 for yes, 0 for no';
            $table->timestamps();
            $table->foreign('added_by')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
};
