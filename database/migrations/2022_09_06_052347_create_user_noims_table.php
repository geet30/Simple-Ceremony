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
        Schema::create('user_noims', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('preferred_name');
            $table->string('person_first_name');
            $table->string('family_name');
            $table->string('person_name_combination');
            $table->integer('person_description')->comment('1:Partner,2:Bride,3:Groom');
            $table->boolean('name_same_as_passport_or_driving_license')->default(false);
            $table->integer('gender')->comment('1:Female, 2:Male, 3:non-binary, 4:X')->nullable();
            $table->text('occupation');
            $table->text('residence_place');
            $table->text('address_line_1');
            $table->text('address_line_2')->nullable();
            $table->text('residence_town_or_city_or_suburb');
            $table->text('residence_state_or_province_or_territory');
            $table->string('postal_code');
            $table->date('date_of_birth');
            $table->string('birth_place');
            $table->string('birth_document');
            $table->text('birth_town_or_city_or_suburb');
            $table->text('birth_state_or_province_or_territory');
            $table->integer('conjugal_status')->comment('1:Divorced, 2:Never validy married, 3:Divorced pending, 4:widowed');
            $table->boolean('are_parties_related');
            $table->text('how_they_related')->comment('only fill when parties are related')->nullable();
            $table->boolean('is_data_and_document_identical')->default(false);
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
        Schema::dropIfExists('user_noims');
    }
};
