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
        Schema::create('ceremony_types_additional_info', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id');
            $table->smallInteger('additional_info')->comment(
                '1 = Full name of person1, 2=Full name of person2,3=Full name of witness1,4=Full name of witness2,5=Full name of child,6=Full name of parent1,7=Full name of parent2,8=Full name of Sponsor(Non god parent) 1,9=Full name of Sponsor(Non god parent) 2')->default(0);
            $table->foreign('type_id')->references('id')->on('ceremony_types')->onDelete('cascade'); 
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
        Schema::dropIfExists('ceremony_types_additional_info');
    }
};
