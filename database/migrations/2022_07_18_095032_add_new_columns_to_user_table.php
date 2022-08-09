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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->nullable()->after('password');
            $table->string('other_name')->nullable()->after('username');
            $table->string('surname')->nullable()->after('other_name');
            $table->string('contact_name')->nullable()->after('surname');
            $table->string('abn_number')->nullable()->after('contact_name');
            $table->string('a_number')->nullable()->after('abn_number');
            $table->string('bank')->nullable()->after('a_number');
            $table->string('bsb')->nullable()->after('bank');
            $table->string('account_no')->nullable()->after('bsb');
            $table->string('partner_type')->nullable()->after('account_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
