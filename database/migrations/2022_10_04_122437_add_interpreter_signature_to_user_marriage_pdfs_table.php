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
        Schema::table('user_marriage_pdfs', function (Blueprint $table) {
            $table->string('declaration_person_signature')->nullable()->after('new_celebrant_signature');
            $table->string('person_before_whom_made_declaration_signature')->nullable()->after('new_celebrant_signature');
            $table->string('interpreter_signature')->nullable()->after('new_celebrant_signature');
            $table->string('interpreter_witness_signature')->nullable()->after('new_celebrant_signature');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_marriage_pdfs', function (Blueprint $table) {
            //
        });
    }
};
