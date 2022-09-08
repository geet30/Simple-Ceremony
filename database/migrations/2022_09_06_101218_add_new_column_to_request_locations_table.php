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
        Schema::table('request_locations', function (Blueprint $table) {
            $table->renameColumn('name', 'username');
            $table->renameColumn('location_name', 'name');
            $table->renameColumn('street_address', 'address');
            $table->renameColumn('suburb', 'town');
            $table->renameColumn('specific_location', 'direction');
            $table->string('phone')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('general_location')->nullable()->after('specific_location');
            $table->string('loc_number')->nullable()->after('general_location');
            $table->string('key_advances')->nullable()->after('loc_number');
            $table->decimal('price',10,2)->default(0)->after('key_advances');
            $table->string('cover_image')->nullable()->after('price');
            $table->text('custom_terms')->nullable()->after('cover_image');
            $table->text('why_this_location')->nullable()->after('custom_terms');
            $table->string('weather_option')->nullable()->after('why_this_location');
            $table->string('getting_there')->nullable()->after('weather_option');
            
            $table->integer('celebrant_id')->nullable()->unsigned()->after('id');
            $table->tinyInteger('type')->default('1')->after('celebrant_id')->comment = '1=>user, 2=>celebrant, 3=>other';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request_locations', function (Blueprint $table) {
            //
        });
    }
};
